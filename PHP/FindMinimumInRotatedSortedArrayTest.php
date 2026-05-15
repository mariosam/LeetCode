<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindMinimumInRotatedSortedArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindMinimumInRotatedSortedArray.php");

class FindMinimumInRotatedSortedArrayTest extends TestCase {

    public function testFindMinimumInRotatedSortedArray() {
        $obj = new FindMinimumInRotatedSortedArray();
        //Test 1
        $want = 1;
        $got = $obj->findMin([3,4,5,1,2]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->findMin([4,5,6,7,0,1,2]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 11;
        $got = $obj->findMin([11,13,15,17]);
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
