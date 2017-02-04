<?php 
/**
* Menu Makanan dan minuman
*/
class Menu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menus_m','menu');
	}

	public function index()
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'menus/list';
		$this->load->view(THEME . 'application', $data);
	}

	public function makanan()
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'menus/makanan';
		$data['menus'] = $this->menu->get_menu_all();
		$this->load->view(THEME . 'application', $data);
	}

	public function minuman()
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'menus/minuman';
		$data['menus'] = $this->menu->get_menu_all();
		$this->load->view(THEME . 'application', $data);
	}

	public function makanan_add()
	{
		$this->secure->loggedin();
		$data['title'] = 'Add Makanan';
		$data['content'] = 'menus/makanan_add';
		$this->load->view(THEME . 'application', $data);
	}

	public function makanan_save()
	{
		$this->secure->loggedin();
		$data['title'] = 'Save Makanan';

		$config['upload_path']          = 'assets/images/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('menu_photo'))
        {
                $this->secure->loggedin();
				$data['title'] = 'Add Makanan';
				$data['content'] = 'menus/makanan_add';
				$this->load->view(THEME . 'application', $data);
        }
        else
        {
                $uploads = $this->upload->data();
                var_dump($uploads);
                $_POST['menu_photo'] = $uploads['file_name'];

                if ($this->menu->insert()) {
					redirect('menu/makanan');
				} else {
					$this->secure->loggedin();
					$data['title'] = 'Add Makanan';
					$data['content'] = 'menus/makanan_add';
					$this->load->view(THEME . 'application', $data);
				}
        }
	}

}
 ?>