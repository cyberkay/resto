<?php 
class Orders_m extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function last()
        {
                $this->db->like('trx_date', date("Y-m-d"));
                $query = $this->db->get('transaksi');
                return $query->num_rows();
        }

        public function create($no_order, $user)
        {
                $this->trx_code = $no_order;
                $this->trx_user = $user;
                $query = $this->db->insert('transaksi', $this);
                return $query;
        }

        public function get($no_order)
        {
                $this->db->join('users', 'users.user_id=transaksi.trx_user');
                $this->db->where('trx_code', $no_order);
                $query = $this->db->get('transaksi');
                return $query->row();
        }

        public function get_items($no_order)
        {
                $this->db->join('menus', 'menus.menu_code=transaksi_detail.td_menu');
                $this->db->where('td_trx', $no_order);
                $query = $this->db->get('transaksi_detail');
                return $query->result();
        }

        public function cek_item($no_order, $menu)
        {
                $this->db->where('td_trx', $no_order);
                $this->db->where('td_menu', $menu);
                $query = $this->db->get('transaksi_detail');
                return $query->row();
        }

        public function insert($no_order, $menu, $harga)
        {
                $this->td_trx = $no_order;
                $this->td_menu = $menu;
                $this->td_harga_active = $harga;
                $query = $this->db->insert('transaksi_detail', $this);
                return $query;
        }

        public function add($no_order, $menu, $qty)
        {
                $this->db->where('td_trx', $no_order);
                $this->db->where('td_menu', $menu);
                $this->db->set('td_qty', $qty);
                $query = $this->db->update('transaksi_detail');
                return $query;
        }

        public function update($code)
        {
                $this->db->where('menu_code', $code);
                $query = $this->db->update('menus', $_POST);
                return $query;
        }

        public function delete($id)
        {
                $this->db->where('menu_code', $id);
                $query = $this->db->delete('menus');

                return $query;
        }

}