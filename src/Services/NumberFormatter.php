<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-05-22
 * Time: 20:48
 */

namespace App\Services;

class NumberFormatter
{
    /**
     * @param float
     * @return string
     */
    public function formatNumber(float $number) :string
    {
        if ($number >= 999500) {
            return number_format(round(($number/1000000), 2), 2).'M';
        } elseif ($number >= 99500) {
            return number_format(round(($number/1000), 0), 0).'K';
        } elseif ($number >= 999.995) {
            return number_format($number, 0, '', ' ');
        } elseif ($number >= 0) {
            return number_format($number, 2);
        } elseif ($number > -999.50) {
            return number_format($number, 2);
        } elseif ($number > -99500) {
            return number_format($number, 0, '', ' ');
        } elseif ($number > -999500) {
            return number_format(round(($number/1000), 0), 0).'K';
        } elseif ($number <= -999500) {
            return number_format(round(($number/1000000), 2), 2).'M';
        }

        return 'Is not a number';
    }
}