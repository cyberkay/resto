<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Security Library
*/

class Secure
{
	protected $CI;

	function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->helper('url');
		$this->CI->load->library('session');
	}
	public function loggedin()
	{
		if (!isset($_SESSION['res_user_id'])) {
			redirect('/user/login?redirect=' . current_url());
		}
		
	}
}

 ?>