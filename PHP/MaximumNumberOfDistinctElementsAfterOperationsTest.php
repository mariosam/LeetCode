<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumNumberOfDistinctElementsAfterOperationsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumNumberOfDistinctElementsAfterOperations.php");

class MaximumNumberOfDistinctElementsAfterOperationsTest extends TestCase {

    public function testMMaximumNumberOfDistinctElementsAfterOperations() {
        $obj = new MaximumNumberOfDistinctElementsAfterOperations();
        //Test 1
        $want = 6;
        $got = $obj->maxDistinctElements( [1,2,2,3,3,4], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->maxDistinctElements( [4,4,4,4], 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
