<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumErasureValueTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumErasureValue.php");

class MaximumErasureValueTest extends TestCase {

    public function testMaximumErasureValue() {
        $obj = new MaximumErasureValue();
        //Test 1
        $want = 17;
        $got = $obj->maximumUniqueSubarray( [4,2,4,5,6] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 8;
        $got = $obj->maximumUniqueSubarray( [5,2,1,2,5,2,1,2,5] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
