<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LassAssessmentSeeder extends Seeder
{
	public function run()
	{
		$data = [
		    [
		        'class'             => 'Residential',
                'assessment_level'  => 20
            ],
            [
                'class'             => 'Agricultural',
                'assessment_level'  => 40
            ],
            [
                'class'             => 'Commercial',
                'assessment_level'  => 50
            ],
            [
                'class'             => 'Industrial',
                'assessment_level'  => 50
            ],
            [
                'class'             => 'Mineral',
                'assessment_level'  => 50
            ],
            [
                'class'             => 'Timberland',
                'assessment_level'  => 20
            ],
        ];
        $this->db->table('land_assessments')->insertBatch($data);

	}
}
