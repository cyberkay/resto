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
		$this->secure->loggedin();
		$data['title'] = 'Dashboard';
		$data['content'] = 'pages/dashboard';
		$this->load->view(THEME . 'application', $data);
	}
}