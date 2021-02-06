<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends Formula
{
	public function index()
	{
		$data = [
		    'title' => 'Dashboard',
            'real_property_tax' => number_format($this->real_property_tax(100,500,(20/100), (2/100)), 2),
            'area'  => $this->getArea(),
            'unit_market_value' => $this->getUnitMarketValue(),
            'assessment_level' => $this->getAssessmentLevel(),
            'tax_rate' => $this->getTaxRate(),
        ];

		echo view('templates/header', $data);
		echo view('pages/dashboard', $data);
		echo view('templates/footer', $data);
	}

    /**
     * calculate the real property tax
     * @param int $area
     * @param int $umv
     * @param int $al
     * @param int $tr
     * @return float|int
     */
    public function real_property_tax($area = 0, $umv = 0, $al = 0, $tr = 0)
    {
        return $this->setArea($area)
            ->setUnitMarketValue($umv)
            ->setAssessmentLevel($al)
            ->setTaxRate($tr)
            ->calculate();
    }
}
