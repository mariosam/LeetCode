<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LastStoneWeightTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LastStoneWeight.php");

class LastStoneWeightTest extends TestCase {

    public function testLastStoneWeight() {
        $obj = new LastStoneWeight();
        //Test 1
        $want = 1;
        $got = $obj->lastStoneWeight( [2,7,4,1,8,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->lastStoneWeight( [1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->lastStoneWeight( [1,3] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
