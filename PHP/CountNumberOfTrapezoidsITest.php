<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountNumberOfTrapezoidsITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountNumberOfTrapezoidsI.php");

class CountNumberOfTrapezoidsITest extends TestCase {

    public function testCountNumberOfTrapezoidsI() {
        $obj = new CountNumberOfTrapezoidsI();
        //Test 1
        $want = 3;
        $got = $obj->countTrapezoids( [[1,0],[2,0],[3,0],[2,2],[3,2]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->countTrapezoids( [[0,0],[1,0],[0,1],[2,1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
