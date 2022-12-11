<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit TwoSumTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("TwoSum.php");

class TwoSumTest extends TestCase {

    public function testTwoSum() {
        $obj = new TwoSum();
        //Test 1
        $want = [0,1];
        $got = $obj->twoSum( [2,7,11,15], 9 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [1,2];
        $got = $obj->twoSum( [3,2,4], 6 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [0,1];
        $got = $obj->twoSum( [3,3], 6 );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
