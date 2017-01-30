<?php 
	$path = THEME . 'layout/';
	$this->load->view($path . 'head'); 
?>
<body>

	<!-- main content -->
	<?php isset($content) ? $this->load->view($content) : '<center>empty</center>'; ?>

<?php $this->load->view($path . 'foot');  ?>