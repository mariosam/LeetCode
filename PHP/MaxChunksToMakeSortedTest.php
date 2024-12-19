<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaxChunksToMakeSortedTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaxChunksToMakeSorted.php");

class MaxChunksToMakeSortedTest extends TestCase {

    public function testMaxChunksToMakeSorted() {
        $obj = new MaxChunksToMakeSorted();
        //Test 1
        $want = 1;
        $got = $obj->maxChunksToSorted( [4,3,2,1,0] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->maxChunksToSorted( [1,0,2,3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
