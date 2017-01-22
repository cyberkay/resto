<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_level extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'level_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'level_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        )
                ));
                $this->dbforge->add_key('level_id', TRUE);
                $this->dbforge->create_table('levels');
        }

        public function down()
        {
                $this->dbforge->drop_table('levels');
        }
}