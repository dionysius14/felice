<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
		$this->load->model('kontak_model');
        // Place your model here...
    }
	
    public function index() {
        $this->load->view('kontak_view');
    }
	public function Post(){ 
		
		$this->form_validation->set_rules('name', 'Nama ', 'trim|required');
		$this->form_validation->set_rules('phone', 'No Telepon', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('message', 'pesan', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data['hasil'] = "Inputan Gagal !";
			$this->load->view('kontak_view',$data);
		}
		else
		{
			  
			 $ci = get_instance();
			
			$config = array(
			  	'protocol' => 'smtp',
				'smtp_host' => 'mail.felicefloristsouvenir.com', //change this
				'smtp_port' => 25,
				'smtp_user' => 'info@felicefloristsouvenir.com',
				'smtp_pass' => 'feliceflorist',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			);
			$ci->load->library('email', $config);
			$ci->email->initialize($config);
	 
			$ci->email->from('info@felicefloristsouvenir.com', 'Felice Florist Souvenir');
			$list = array('info@felicefloristsouvenir.com');
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$pesan = $this->input->post('message');
			
			$message ='<b>Nama :</b><br/>'. $name. '<br/><br/><b>E-mail :</b><br/>' . $email. '<br/><br/><b>Kontak :</b><br/>' . $phone. '
						<br/><br/><b>Pesan :</b><br/>' . $pesan. '<br/><br/><br/><br/>
			Dikirim melalui kontak website Felice Florist & Souvenir |
						'; 			
						
			$ci->email->to($list);
			$ci->email->subject('Felice Florist & Souvenir');
			$ci->email->message($message);
			if ($this->email->send()) {
				// echo 'Email sent.';
				   $param = array(
				   'kontak_nama' => $this->input->post('name'),
				   'kontak_telepon' => $this->input->post('phone'),
				   'kontak_email' => $this->input->post('email'),
				   'kontak_pesan'=> $this->input->post('message'),
				   'kontak_tgl_input'=> date('y-m-d'),
				   );
				   
						$this->kontak_model->insert($param);
						echo "<script>
						alert('Data berhasil dikirim');
						</script>";				
						redirect('kontak','refresh');
			} else {
				echo "<script>
						alert('Gagal');
						</script>";	
				show_error($this->email->print_debugger());
			}
		
		
		}
    }

}
