<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Security Library
*/

class My_Security
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
		if (isset($this->session->user_id)) {
			echo "loggedin";
		} else {
			redirect('/user');
		}
		
	}
}

 ?>