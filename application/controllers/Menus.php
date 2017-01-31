<?php 
/**
* Menu Makanan dan minuman
*/
class Menus extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'menus/list';
		$this->load->view(THEME . 'application', $data);
	}
}
 ?>