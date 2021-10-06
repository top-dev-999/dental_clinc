<?php $version = $this->db->get_where('settings', array('type' => 'version'))->row()->description;?>
<!-- Footer -->
<footer class="main">
	&copy; 2021 <strong>Dental Clinic Management System</strong>
    <strong class="pull-right"> VERSION <?php echo $version;?></strong>

</footer>
