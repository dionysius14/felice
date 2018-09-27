<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="footer">
	<ul class="social clearfix">
		<?php
		$this->db->select();
		$this->db->from('about_us');
		$this->db->where('is_delete', '0');
		$query = $this->db->get();
		$result =  $query->row() ;
		?>
					
		<li><a target="_blank" href="<?php echo $result->link_fb?>" class="fb" data-title="Facebook"></a></li>
		<li><a target="_blank" href="<?php echo $result->link_twitter?>" class="twitter" data-title="Twitter"></a></li>
		<!-- <li><a href="#" class="google" data-title="Google +"></a></li> -->
		<li><a target="_blank" href="<?php echo $result->link_ig?>" class="behance" data-title="Instagram"></a></li>
		<!--<li><a href="#" class="twitter" data-title="Twitter"></a></li>
		<li><a href="#" class="dribble" data-title="Dribble"></a></li>-->
		<li><a target="_blank" href="<?php echo $result->link_youtube ?>" class="rss" data-title="Youtube"></a></li>
	</ul><!-- end social -->

	<div class="rights">
		<p>Developed by <a target="_blank" href="http://www.nusantaratechno.com">NusantaraTechno.com</a></p>
	</div><!-- end rights -->
</div ><!-- end footer -->