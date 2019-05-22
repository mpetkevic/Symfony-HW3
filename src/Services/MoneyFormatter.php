<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-05-22
 * Time: 20:50
 */

namespace App\Services;

class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    /**
     * @param float
     * @return string
     */
    public function formatEur(float $number) :string
    {
        return $this->numberFormatter->formatNumber($number). ' €';
    }

    /**
     * @param float
     * @return string
     */
    public function formatUsd(float $number) :string
    {
        return '$'. $this->numberFormatter->formatNumber($number);
    }
}