<?php 
/**
* Laporan
*/
class Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_m','laporan');

	}
	public function index()
	{
		
	}

	public function penjualan()
	{
		$this->secure->loggedin();
		$data['title'] = 'Laporan Penjualan';
		$data['content'] = 'laporan/penjualan';

		$data['penjualan'] = $this->laporan->get_penjualan();
		// $data['items'] = $this->order->get_items($no_order);
		$this->load->view(THEME . 'application', $data);
	}
}

 ?>