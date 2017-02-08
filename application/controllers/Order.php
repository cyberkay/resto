<?php 
/**
* Order Makanan dan minuman
*/
class Order extends CI_Controller
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

	public function shop()
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'resto/shop';
		$data['menus'] = $this->menu->get_menu_all();
		$data['makanan'] = $this->menu->get_menu_all('menu_jenis', 'makanan');
		$data['minuman'] = $this->menu->get_menu_all('menu_jenis', 'minuman');
		$this->load->view(THEME . 'application', $data);
	}

	public function view($code)
	{
		$this->secure->loggedin();
		$data['title'] = 'View Menu';
		$data['content'] = 'menus/view';
		$data['menu'] = $this->menu->get_menu($code);
		$this->load->view(THEME . 'application', $data);
	}

	public function edit($code)
	{
		$this->secure->loggedin();
		$data['title'] = 'Edit Menu';
		$data['content'] = 'menus/edit';
		$data['menu'] = $this->menu->get_menu($code);
		$this->load->view(THEME . 'application', $data);
	}

	public function makanan()
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'menus/makanan';
		$data['menus'] = $this->menu->get_menu_all('menu_jenis', 'makanan');
		$this->load->view(THEME . 'application', $data);
	}

	public function minuman()
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'menus/minuman';
		$data['menus'] = $this->menu->get_menu_all('menu_jenis', 'minuman');
		$this->load->view(THEME . 'application', $data);
	}

	public function makanan_add()
	{
		$this->secure->loggedin();
		$data['title'] = 'Add Makanan';
		$data['content'] = 'menus/makanan_add';
		$this->load->view(THEME . 'application', $data);
	}

	public function minuman_add()
	{
		$this->secure->loggedin();
		$data['title'] = 'Add Minuman';
		$data['content'] = 'menus/minuman_add';
		$this->load->view(THEME . 'application', $data);
	}

	public function save()
	{
		$this->secure->loggedin();
		$data['title'] = 'Save Makanan';

		$config['upload_path']          = 'assets/images/menus/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);
        if (!empty($_FILES['menu_photo']['name'])) {
        	if ( ! $this->upload->do_upload('menu_photo'))
	        {
	        		$data['alert'] = '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Ops, silahkan upload gambar yang masuk dalam kriteria.
                            </div>';
	                $this->secure->loggedin();
					$data['title'] = 'Add Makanan';
					$data['content'] = 'menus/makanan_add';
					$this->load->view(THEME . 'application', $data);
	        } else {
		        $uploads = $this->upload->data();
	            $_POST['menu_photo'] = $uploads['file_name'];
	            if ($this->menu->insert()) {
	            	$this->session->mark_as_flash('alert');
					$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Menu <b>' . $_POST['menu_name'] . '</b> berhasil disimpan.
                            </div>');
					redirect($_GET['redirect']);
				} else {
					$this->secure->loggedin();
					$data['alert'] = '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Ops, kesalahan sistem, silahkan ulangi atau hubungi administrator.
                            </div>';
					$data['title'] = 'Add Makanan';
					$data['content'] = 'menus/makanan_add';
					$this->load->view(THEME . 'application', $data);
				}
        	}
        } else {
        		if ($this->menu->insert() !== false) {
        			$this->session->mark_as_flash('alert');
					$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Menu <b>' . $_POST['menu_name'] . '</b> berhasil disimpan.
                            </div>');
					redirect($_GET['redirect']);
				} else {
					$this->secure->loggedin();
					$data['alert'] = '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Ops, kesalahan sistem, silahkan ulangi atau hubungi administrator.
                            </div>';
					$data['title'] = 'Add Makanan';
					$data['content'] = 'menus/makanan_add';
					$this->load->view(THEME . 'application', $data);
				}
        }
	}

	public function update($code)
	{
		$this->secure->loggedin();
		$data['title'] = 'Update Menu';
		$data['menu'] = $this->menu->get_menu($code);

		$config['upload_path']          = 'assets/images/menus/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);
        if (!empty($_FILES['menu_photo']['name'])) {
        	if ( ! $this->upload->do_upload('menu_photo'))
	        {
	        		$data['alert'] = '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Ops, silahkan upload gambar yang masuk dalam kriteria.
                            </div>';
	                $this->secure->loggedin();
					$data['title'] = 'Add Makanan';
					$data['content'] = 'menus/edit';
					$this->load->view(THEME . 'application', $data);
	        } else {
		        $uploads = $this->upload->data();
	            $_POST['menu_photo'] = $uploads['file_name'];
	            if ($this->menu->update($_POST['menu_code'])) {
	            	$this->session->mark_as_flash('alert');
					$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Menu <b>' . $_POST['menu_name'] . '</b> berhasil disimpan.
                            </div>');
					redirect($_GET['redirect']);
				} else {
					$this->secure->loggedin();
					$data['alert'] = '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Ops, kesalahan sistem, silahkan ulangi atau hubungi administrator.
                            </div>';
					$data['title'] = 'Edit Makanan';
					$data['content'] = 'menus/edit';
					$this->load->view(THEME . 'application', $data);
				}
        	}
        } else {
        		if ($this->menu->update($_POST['menu_code']) !== false) {
        			$this->session->mark_as_flash('alert');
					$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Menu <b>' . $_POST['menu_name'] . '</b> berhasil disimpan.
                            </div>');
					redirect($_GET['redirect']);
				} else {
					$this->secure->loggedin();
					$data['alert'] = '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Ops, kesalahan sistem, silahkan ulangi atau hubungi administrator.
                            </div>';
					$data['title'] = 'Edit Makanan';
					$data['content'] = 'menus/edit';
					$this->load->view(THEME . 'application', $data);
				}
        }
	}

	public function delete($id)
	{
		
		$this->secure->loggedin();
		if ($this->menu->delete($id)) {
			$this->session->mark_as_flash('alert');
			$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Menu <b>' . $id . '</b> berhasil dihapus.
                            </div>');
			redirect($_GET['redirect']);
		} else {
			$data['alert'] = '<div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                                . 'Ops, kesalahan sistem silahkan hubungi administrator' .
                            '</div>';
			redirect($_GET['redirect']);
		}
	}

}
 ?>