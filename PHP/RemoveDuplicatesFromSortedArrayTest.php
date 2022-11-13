<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RemoveDuplicatesFromSortedArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RemoveDuplicatesFromSortedArray.php");

class RemoveDuplicatesFromSortedArrayTest extends TestCase {

    public function testRemoveDuplicatesFromSortedArray() {
        $obj = new RemoveDuplicatesFromSortedArray();
        //Test 1
        $want = 2;
        $got = $obj->removeDuplicates( [1,1,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 5;
        $got = $obj->removeDuplicates( [0,0,1,1,1,2,2,3,3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
