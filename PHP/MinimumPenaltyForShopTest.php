<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumPenaltyForShopTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumPenaltyForShop.php");

class MinimumPenaltyForShopTest extends TestCase {

    public function testMinimumPenaltyForShop() {
        $obj = new MinimumPenaltyForShop();
        //Test 1
        $want = 2;
        $got = $obj->bestClosingTime( "YYNY" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->bestClosingTime( "NNNNN" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->bestClosingTime( "YYYY" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
