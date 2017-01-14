<?php 
/**
* Controller Page
*/
class Page extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('themes/bootstrap/application.php');
	}
}