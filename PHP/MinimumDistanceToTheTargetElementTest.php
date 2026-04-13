<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumDistanceToTheTargetElementTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumDistanceToTheTargetElement.php");

class MinimumDistanceToTheTargetElementTest extends TestCase {

    public function testMinimumDistanceToTheTargetElement() {
        $obj = new MinimumDistanceToTheTargetElement();
        //Test 1
        $want = 1;
        $got = $obj->getMinDistance( [1,2,3,4,5], 5, 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->getMinDistance( [1], 1, 0 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->getMinDistance( [1,1,1,1,1,1,1,1,1,1], 1, 0 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
