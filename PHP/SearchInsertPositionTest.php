<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SearchInsertPositionTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SearchInsertPosition.php");

class SearchInsertPositionTest extends TestCase {

    public function testSearchInsertPosition() {
        $obj = new SearchInsertPosition();
        //Test 1
        $want = 2;
        $got = $obj->searchInsert( [1,3,5,6], 5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->searchInsert( [1,3,5,6], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->searchInsert( [1,3,5,6], 7 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
