<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountWaysToBuildGoodStringsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountWaysToBuildGoodStrings.php");

class CountWaysToBuildGoodStringsTest extends TestCase {

    public function testCountWaysToBuildGoodStrings() {
        $obj = new CountWaysToBuildGoodStrings();
        //Test 1
        $want = 8;
        $got = $obj->countGoodStrings( 3, 3, 1, 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 5;
        $got = $obj->countGoodStrings( 2, 3, 1, 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
