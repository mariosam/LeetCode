<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountCommasInRangeIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountCommasInRangeII.php");

class CountCommasInRangeIITest extends TestCase {

    public function testCountCommasInRangeII() {
        $obj = new CountCommasInRangeII();
        //Test 1
        $want = 3;
        $got = $obj->countCommas( 1002 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countCommas( 998 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
