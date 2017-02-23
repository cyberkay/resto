<?php 
/**
* Pesanan Makanan dan minuman
*/
class Pesanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesanan_m','pesanan');
		$this->load->model('orders_m','order');
		$this->load->model('menus_m','menu');
	}

	public function index()
	{
		$this->secure->loggedin();
		$data['title'] = 'Daftar Pesanan';
		$data['content'] = 'resto/pesanan';
		$data['pesanan']	= $this->pesanan->last_orders();
		$data['makanan'] = $this->menu->get_menu_all('menu_jenis', 'makanan');
		$data['minuman'] = $this->menu->get_menu_all('menu_jenis', 'minuman');

		$this->load->view(THEME . 'application', $data);
	}

	public function update($item, $status)
	{
		$update = $this->pesanan->update($item, $status);
		if ($update) {
			$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Status pesanan telah diupdate.
                            </div>');
		} else {
			$this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Uppss, status gagal diupdate.
                            </div>');
		}
		redirect('pesanan');
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