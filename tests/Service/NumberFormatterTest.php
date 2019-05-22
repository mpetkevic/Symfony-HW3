<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-05-22
 * Time: 20:51
 */

namespace App\Tests\Service;

use App\Services\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    public function testFormatNumber()
    {
        $num = new NumberFormatter();
        $this->assertEquals('1.00M', $num->formatNumber(999500));
        $this->assertEquals('2.84M', $num->formatNumber(2835779));
        $this->assertEquals('535K', $num->formatNumber(535216));
        $this->assertEquals('100K', $num->formatNumber(99500));
        $this->assertEquals('27 534', $num->formatNumber(27533.78));
        $this->assertEquals('1 000', $num->formatNumber(999.999));
        $this->assertEquals('999.99', $num->formatNumber(999.99));
        $this->assertEquals('533.10', $num->formatNumber(533.1));
        $this->assertEquals('66.67', $num->formatNumber(66.6666));
        $this->assertEquals('12.00', $num->formatNumber(12));
        $this->assertEquals('-124K', $num->formatNumber(-123654.89));
    }
}
