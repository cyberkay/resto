<?php 
	$path = THEME . 'layout/';
	$this->load->view($path . 'head'); 
?>
<body>
	<?php $this->load->view($path . 'header');  ?>
	<?= $this->session->flashdata('alert'); ?>
	<?= (isset($alert)) ? $alert : '' ; ?>
	<!-- main content -->
	<?php isset($content) ? $this->load->view($content) : '<center>empty</center>'; ?>

<?php $this->load->view($path . 'footer');  ?>
<?php $this->load->view($path . 'foot');  ?>