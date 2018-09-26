<?php
 
class databased extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template  
		$this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
        $this->lib->check_session();
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$this->session->set_userdata("subtitle","Database");
		
		$data['error']=	'';
		$data['status'] = '';
		$data['profile'] = $profil;
		// $this->session->set_userdata("error","");
        $this->load->view('pengaturan/profile_view',$data);
    }

    public function backup() {
		$data['akses']='pg_backup';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->lib->check_session();
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$this->session->set_userdata("subtitle","Backup Database");
		
		$data['error']=	'';
		$data['status'] = ''; 
		// $this->session->set_userdata("error","");
        $this->load->view('pengaturan/database_backup_view',$data);
    }

    public function restore() {
		$data['akses']='pg_restore';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->lib->check_session();
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$this->session->set_userdata("subtitle","Restore Database");
		
		$data['error']=	'';
		$data['status'] = ''; 
		// $this->session->set_userdata("error","");
        $this->load->view('pengaturan/database_restore_view',$data);
    }
	
	function backup_now() {  
        $this->load->helper('file');
        $this->load->helper('download');

        $namaFile = 'back up Felice ' . date('d-m-Y') . '.txt';
        $path = '/path/to/' . $namaFile;
 
 
        include APPPATH . 'config/database.php';
        $this->dbconfig = $db;
        $mysql_hostname = $this->dbconfig['default']['hostname'];
        $mysql_database = $this->dbconfig['default']['database'];
        $mysql_username = $this->dbconfig['default']['username'];
        $mysql_password = $this->dbconfig['default']['password'];
		 
		 $this->_conn = new PDO(
                'mysql:host=' . $mysql_hostname . ';' . 'dbname=' . $mysql_database,
                $mysql_username,
                $mysql_password
            );
		$link=$this->_conn; 

        $string = "";
        $sql1 = "show tables;"; 
        $result1 = mysql_query($sql1);
		  echo "result=".count($result1);
        if ($result1) {
            while ($row1 = mysql_fetch_row($result1)) {
                if ($row1[0] == 'ci_sessions')
                    continue;

                $string .= "-- Table structure for table `$row1[0]` \n";
                $string .= "DROP TABLE IF EXISTS `$row1[0]`;\n\n";
                $sql2 = "show create table `$row1[0]`; ";
                $result2 = mysql_query($sql2);
                $row2 = mysql_fetch_assoc($result2);
                $string .= $row2['Create Table'] . ";\n\n";
                mysql_free_result($result2);

                $sql3 = "select * from `$row1[0]`;";
                $result3 = mysql_query($sql3);
                $num_rows = mysql_num_rows($result3);
                $num_fields = mysql_num_fields($result3);
				 
                if ($num_rows > 0) {
                    $string .= "-- dumping data for table `$row1[0]` \n";
                    $field_type = array();
                    $i = 0;
                    while ($i < $num_fields) {
                        $meta = mysql_fetch_field($result3, $i);
                        array_push($field_type, $meta->type);
                        $i++;
                    }

                    $string .= "insert into `$row1[0]` values\n";
                    $index = 0;
                    while ($row3 = mysql_fetch_row($result3)) {
                        $string .= "(";
                        for ($i = 0; $i < $num_fields; $i++) {
                            if (is_null($row3[$i]))
                                $string .= "null";
                            else {
                                switch ($field_type[$i]) {
                                    case 'int':
                                        $string .= $row3[$i];
                                        break;
                                    case 'string':
                                    case 'blob' :
                                    default:
                                        $string .= "'" . mysql_real_escape_string($row3[$i]) . "'";
                                }
                            }
                            if ($i < $num_fields - 1)
                                $string .= ", ";
                        }
                        $string .= ")";

                        if ($index < $num_rows - 1)
                            $string .= ", ";
                        else
                            $string .= ";";
                        $string .= "\n";

                        $index++;
                    }
                }
                mysql_free_result($result3);
                $string .= "\n";
            }
				$this->post['result'] = $string;  
				force_download($namaFile, $string); 
				$this->load->view('pengaturan/database_backup_view', $this->post); 
				
        }
		else
		{
		  // echo "mysql_hostname=".$mysql_hostname." mysql_database=". $mysql_database." mysql_username=".$mysql_username." mysql_password=". $mysql_password;  
		  
			$namaFile = 'error_log.txt';
			$string = "Tidak bisa mengakses server. coba lagi atau hubungi developer"; 
				$this->post['result'] = $string;  
				force_download($namaFile, $string); 
		}

				/* redirect('pengaturan/databased/backup');  */
				$this->load->view('pengaturan/database_backup_view', $this->post); 
    }

	function restore_now()
	{
			$this->load->helper('file');
			$config['upload_path'] = dirname(BASEPATH) . '/fileholder/';
            $config['file_name'] = 'import';
            $config['allowed_types'] = 'txt';
            $config['overwrite'] = TRUE;
			$this->upload->initialize($config);
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) { //upload failed
                $data['warning'] = 'gagal';
                $data['error'] = $this->upload->display_errors();
				$data['subtitle'] = 'Export Import';
				redirect('pengaturan/databased/restore'); 
            } else {
                $this->post['warning'] = 'import berhasil dilakukan';
                $filename = dirname(BASEPATH) . '/fileholder/import.txt';

                $query = '';
                $display = '';
                $tables = $this->db->list_tables();
                $this->load->dbforge();
                $x = 0;
                foreach ($tables as $table) {
                    if ($table == 'ci_sessions')
                        continue;
                    else
                        $this->dbforge->drop_table($table);
                }

                $sql = explode(";", file_get_contents($filename));
                foreach ($sql as $query) {
                    if (!preg_match("'^--'", $query)) {
                        if (trim($query)) {
							mysql_query($query);
                            // $this->db->query($query);
                        }
                    }
                }

                $this->db->query('CREATE TABLE IF NOT EXISTS `ci_sessions` (
					`session_id` varchar(100) NOT NULL,
					`ip_address` varchar(100) NOT NULL,
					`user_agent` varchar(100) NOT NULL,
					`last_activity` varchar(100) NOT NULL,
					`user_data` text NOT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=latin1;');

                redirect('login/logout/');
		}
	}
}