<?php

namespace App\Database\Seeds;

use App\Models\Landassessment;
use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		$this->call(LassAssessmentSeeder::class);
	}
}
