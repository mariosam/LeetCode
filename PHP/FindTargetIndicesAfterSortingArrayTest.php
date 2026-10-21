<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTargetIndicesAfterSortingArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTargetIndicesAfterSortingArray.php");

class FindTargetIndicesAfterSortingArrayTest extends TestCase {

    public function testFindTargetIndicesAfterSortingArray() {
        $obj = new FindTargetIndicesAfterSortingArray();
        //Test 1
        $want = [1,2];
        $got = $obj->targetIndices( [1,2,5,2,3], 2 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [3];
        $got = $obj->targetIndices( [1,2,5,2,3], 3 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [4];
        $got = $obj->targetIndices( [1,2,5,2,3], 5 );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
