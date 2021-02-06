<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Formula extends BaseController
{
    public $area;

    public $unit_market_value;

    public $assessment_level;

    public $tax_rate;

    public function calculate()
    {
        return $this->getArea() * $this->getUnitMarketValue() * $this->getAssessmentLevel() * $this->getTaxRate();
    }

    /**
     * @param mixed $area
     */
    public function setArea($area): Formula
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $unit_market_value
     */
    public function setUnitMarketValue($unit_market_value): Formula
    {
        $this->unit_market_value = $unit_market_value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitMarketValue()
    {
        return $this->unit_market_value;
    }

    /**
     * @param mixed $assessment_level
     */
    public function setAssessmentLevel($assessment_level): Formula
    {
        $this->assessment_level = $assessment_level;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssessmentLevel()
    {
        return $this->assessment_level;
    }

    /**
     * @param mixed $tax_rate
     */
    public function setTaxRate($tax_rate): Formula
    {
        $this->tax_rate = $tax_rate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }
}
