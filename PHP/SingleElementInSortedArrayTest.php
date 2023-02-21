<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SingleElementInSortedArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SingleElementInSortedArray.php");

class SingleElementInSortedArrayTest extends TestCase {

    public function testSingleElementInSortedArray() {
        $obj = new SingleElementInSortedArray();
        //Test 1
        $want = 2;
        $got = $obj->singleNonDuplicate( [1,1,2,3,3,4,4,8,8] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 10;
        $got = $obj->singleNonDuplicate( [3,3,7,7,10,11,11] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->singleNonDuplicate( [1,2,2,3,3] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
