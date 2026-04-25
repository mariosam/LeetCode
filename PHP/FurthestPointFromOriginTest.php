<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FurthestPointFromOriginTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FurthestPointFromOrigin.php");

class FurthestPointFromOriginTest extends TestCase {

    public function testFruitIntoBaskets() {
        $obj = new FurthestPointFromOrigin();
        //Test 1
        $want = 3;
        $got = $obj->furthestDistanceFromOrigin( "L_RL__R" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 5;
        $got = $obj->furthestDistanceFromOrigin( "_R__LL_" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 7;
        $got = $obj->furthestDistanceFromOrigin( "_______" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
