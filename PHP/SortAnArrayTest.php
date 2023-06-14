<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SortAnArray.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SortAnArray.php");

class SortAnArrayTest extends TestCase {

    public function testSortAnArray() {
        $obj = new SortAnArray();
        //Test 1
        $want = [1,2,3,5];
        $got = $obj->sortArray( [5,2,3,1] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [0,0,1,1,2,5];
        $got = $obj->sortArray( [5,1,1,2,0,0] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
