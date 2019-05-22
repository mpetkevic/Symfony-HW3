<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-05-22
 * Time: 20:53
 */

namespace App\Tests\Service;

use App\Services\MoneyFormatter;
use App\Services\NumberFormatter;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    public function testFormatEur()
    {
        $moneyFormatter = new MoneyFormatter(new NumberFormatter());

//        $mock = $this->createMock(NumberFormatter::class);
//        $mock->expects($this->any)
//            ->method('formatNumber')
//            ->willReturn();
        $this->assertEquals('2.84M €', $moneyFormatter->formatEur(2835779));
        $this->assertEquals('211.99 €', $moneyFormatter->formatEur(211.99));
    }

    public function testFormatUsd()
    {
        $moneyFormatter = new MoneyFormatter(new NumberFormatter());
        $this->assertEquals('$2.84M', $moneyFormatter->formatUsd(2835779));
        $this->assertEquals('$211.99', $moneyFormatter->formatUsd(211.99));
    }
}
