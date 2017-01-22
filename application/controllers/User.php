<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Controller User
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$data['title'] = 'Please Login';
		$data['content'] = 'users/login';
		$this->load->view(THEME . 'blank', $data);
	}

	public function logout()
	{
		echo "Destroy your session...";
		$this->session->unset_userdata('res_user_id');
		$this->session->unset_userdata('res_level');
		$this->session->set_flashdata('alert', '
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Logout Successfuly!</strong> See you letter.
				</div>
				');
		redirect('/user/login?redirect=' . base_url());
	}

	public function auth()
	{
		echo "Authenticating... <br/>";

		$user = $this->users_m->get_user($_POST['username'], $_POST['password']);

		if ($user) {
			$this->session->set_userdata('res_user_id', $user->user_id);
			$this->session->set_userdata('res_level', $user->level);
			echo "Allowed, Follow this link if your browser cannot automate redirect <a href='" . $_GET['redirect'] . "' title='visit'>visit</a>";
			$this->session->set_flashdata('alert', '
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Now your loggedin!</strong> Welcome ' . $user->name . '.
				</div>
				');
			header('Location: ' . $_GET['redirect']);
		} else {
			$this->session->set_flashdata('alert', '
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Ops Something Went Wrong!</strong> Username and password have not match.
				</div>
				');
			redirect('/user/login?redirect=' . $_GET['redirect']);
		}
		
	}
}

