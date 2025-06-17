<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumDifferenceBetweenIncreasingElementsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumDifferenceBetweenIncreasingElements.php");

class MaximumDifferenceBetweenIncreasingElementsTest extends TestCase {

    public function testMaximumDifferenceBetweenIncreasingElements() {
        $obj = new MaximumDifferenceBetweenIncreasingElements();
        //Test 1
        $want = 4;
        $got = $obj->maximumDifference( [7,1,5,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->maximumDifference( [9,4,3,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 9;
        $got = $obj->maximumDifference( [1,5,2,10] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
