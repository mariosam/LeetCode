<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MergeSortedArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MergeSortedArray.php");

class MergeSortedArrayTest extends TestCase {

    public function testMergeSortedArray() {
        $obj = new MergeSortedArray();
        //Test 1
        $want = [1,2,2,3,5,6];
        $got = $obj->merge( [1,2,3,0,0,0], 3, [2,5,6], 3 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [1];
        $got = $obj->merge( [1], 1, [], 0 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [1];
        $got = $obj->merge( [], 0, [1], 1 );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 4
        $want = [1,2,3,4,5,6];
        $got = $obj->merge( [4,0,0,0,0,0], 1, [1,2,3,5,6], 5 );
        echo "\nTest 4: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 5
        $want = [1,2,3,4,5,6];
        $got = $obj->merge( [1,2,4,5,6,0], 5, [3], 1 );
        echo "\nTest 5: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
