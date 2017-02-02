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

        public function get_user($username, $password)
        {
                $this->db->where('username', $username);
                $this->db->where('password', md5($password));
                $query = $this->db->get('users');
                return $query->row();
        }

        public function get_menu_all()
        {
                $query = $this->db->get('menus');
                return $query->result();
        }

        public function insert()
        {

                $query = $this->db->insert('menus', $_POST);
                return $query;
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}