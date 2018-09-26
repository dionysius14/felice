<?php
$this->db->select();
$this->db->from('setting_profile');
$this->db->where('is_delete', '0');
$query = $this->db->get();
$profile =  $query->row();
?>
<p><?php echo $profile->profile_alamat; ?><br/>
<?php echo $profile->profile_telepon; ?><br/>
<?php echo $profile->profile_fax; ?><br/></p>