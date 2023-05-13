<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BinarySearchTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BinarySearch.php");

class BinarySearchTest extends TestCase {

    public function testBinarySearch() {
        $obj = new BinarySearch();
        //Test 1
        $want = 4;
        $got = $obj->search( [-1,0,3,5,9,12], 9 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->search( [-1,0,3,5,9,12], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->search( [5], 5 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
