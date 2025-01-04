<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfWaysToSplitArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfWaysToSplitArray.php");

class NumberOfWaysToSplitArrayTest extends TestCase {

    public function testNumberOfWaysToSplitArray() {
        $obj = new NumberOfWaysToSplitArray();
        //Test 1
        $want = 2;
        $got = $obj->waysToSplitArray( [10,4,-8,7] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->waysToSplitArray( [2,3,1,0] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
