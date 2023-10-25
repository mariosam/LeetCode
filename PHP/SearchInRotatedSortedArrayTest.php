<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SearchInRotatedSortedArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SearchInRotatedSortedArray.php");

class SearchInRotatedSortedArrayTest extends TestCase {

    public function testSearchInRotatedSortedArray() {
        $obj = new SearchInRotatedSortedArray();
        //Test 1
        $want = 4;
        $got = $obj->search( [4,5,6,7,0,1,2], 0 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->search( [4,5,6,7,0,1,2], 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->search( [1], 0 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
