<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'unique'     => TRUE
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200'
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '64'
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '64'
                        ),
                        'level' => array(
                                'type' => 'INT',
                                'constraint' => '64'
                        ),
                        'status'    =>  array(
                            'type'              =>  'ENUM("active","inactive")',
                            'default'           =>  "active"
                        ),
                ));
                $this->dbforge->add_key('user_id', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}