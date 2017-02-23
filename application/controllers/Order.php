<?php 
/**
* Order Makanan dan minuman
*/
class Order extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('orders_m','order');
		$this->load->model('menus_m','menu');
	}

	public function index()
	{
		$this->secure->loggedin();
		$label 	= "P";
		$kode	= $this->order->last() + 1;
		$no_order 	= $label . date("Y") . date("m") . date("d") . $kode;
		$user 	= $this->session->userdata('res_user_id');
		

		if ($this->order->create($no_order, $user)) {
			$this->session->mark_as_flash('alert');
					$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                New Nota <b>' . $no_order . '</b> dibuat.
                            </div>');
			redirect('order/shop/' . $no_order);
		} else {
			echo "Opss, Something went wrong!!!";
		}
	}

	public function shop($no_order)
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'resto/shop';
		$data['menus'] = $this->menu->get_menu_all();
		$data['makanan'] = $this->menu->get_menu_all('menu_jenis', 'makanan');
		$data['minuman'] = $this->menu->get_menu_all('menu_jenis', 'minuman');

		$data['order'] = $this->order->get($no_order);
		$data['items'] = $this->order->get_items($no_order);
		$this->load->view(THEME . 'application', $data);
	}

	public function nota($no_order)
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Menu';
		$data['content'] = 'resto/nota';

		$data['order'] = $this->order->get($no_order);
		$data['items'] = $this->order->get_items($no_order);
		$this->load->view(THEME . 'blank', $data);
	}

	public function insert($no_order, $menu, $harga)
	{
		$this->secure->loggedin();
		//echo $no_order;
		$item = $this->order->cek_item($no_order, $menu);
		if ($item == NULL) {
			$this->order->insert($no_order, $menu, $harga);
			$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Menu <b>' . $menu . '</b> telah ditambahkan.
                            </div>');
		} else {
			$qty = $item->td_qty+1;
			$this->order->add($no_order, $menu, $qty);
			$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Quantity Menu <b>' . $menu . '</b> telah ditambahkan.
                            </div>');
		}
		

		redirect('order/shop/' . $no_order);
	}

	public function cancel($no_order='')
	{
		$this->order->cancel($no_order);
		$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                No Nota <b>' . $no_order . '</b> telah dibatalkan.
                            </div>');
		redirect('page');
	}

	public function remove($item='',$no_order='')
	{
		$this->order->remove($item);
		$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Item telah dihapus.
                            </div>');
		redirect('order/shop/' . $no_order);
	}

	public function save($no_order)
	{
		$this->secure->loggedin();

		if ($this->order->save($no_order)) {
			$this->session->mark_as_flash('alert');
					$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                No Nota <b>' . $no_order . '</b> telah diproses.
                            </div>');
					echo "<meta http-equiv='refresh' content='0; URL=" . base_url('order/') . "'>";
					if (isset($_POST['print'])) {
						echo "<script>
						      window.open('" . base_url('order/nota') . "/" . $no_order . "', '_blank');
						  
						</script>";
						echo "Silahkan cetak nota";
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