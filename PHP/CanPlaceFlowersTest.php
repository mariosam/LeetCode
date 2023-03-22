<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CanPlaceFlowersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CanPlaceFlowers.php");

class CanPlaceFlowersTest extends TestCase {

    public function testCanPlaceFlowers() {
        $obj = new CanPlaceFlowers();
        //Test 1
        $want = true;
        $got = $obj->canPlaceFlowers( [1,0,0,0,1], 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->canPlaceFlowers( [1,0,0,0,1], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
