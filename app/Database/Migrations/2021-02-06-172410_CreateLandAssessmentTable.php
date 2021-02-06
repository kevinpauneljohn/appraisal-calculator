<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLandAssessmentTable extends Migration
{
	public function up()
	{
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'class' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null'=>false,
            ),
            'assessment_level' => array(
                'type' => 'INT',
                'constraint' => 5,
                'null'=>false,
            ),
            'created_date datetime default current_timestamp',
            'updated_date datetime default current_timestamp on update current_timestamp',
        ));
        $this->forge->addKey('id',true);
        $this->forge->createTable('land_assessments');
	}

	public function down()
	{
        $this->forge->dropTable('land_assessments');
	}
}
