<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
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
		$this->my_security->loggedin();
		$this->load->view('themes/bootstrap/application.php');
	}
}