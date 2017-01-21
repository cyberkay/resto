<?php 
	$path = 'themes/bootstrap/layout/';
	$this->load->view($path . 'head'); 
?>
<body>
	<?php $this->load->view($path . 'header');  ?>

	<!-- main content -->
	<?php isset($content) ? $this->load->view($content) : '<center>empty</center>'; ?>

<?php $this->load->view($path . 'foot');  ?>