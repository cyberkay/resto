<?php 
class Menus_m extends CI_Model {

        public $menu_code;
        public $menu_name;
        public $menu_jenis;
        public $menu_desc;
        public $menu_harga_modal;
        public $menu_harga_jual;
        public $menu_stok;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_menu($code)
        {
                $this->db->where('menu_code', $code);
                $query = $this->db->get('menus');
                return $query->row();
        }

        public function get_menu_all($field='', $value='')
        {
                if ($field != "") {
                        $this->db->where($field, $value);
                }
                
                $query = $this->db->get('menus');
                return $query->result();
        }

        public function insert()
        {

                $query = $this->db->insert('menus', $_POST);
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