<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindAllKDistantIndicesInAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindAllKDistantIndicesInAnArray.php");

class FindAllKDistantIndicesInAnArrayTest extends TestCase {

    public function testFindAllKDistantIndicesInAnArray() {
        $obj = new FindAllKDistantIndicesInAnArray();
        //Test 1
        $want = [1,2,3,4,5,6];
        $got = $obj->findKDistantIndices( [3,4,9,1,3,9,5], 9, 1 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [0,1,2,3,4];
        $got = $obj->findKDistantIndices( [2,2,2,2,2], 2, 2 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
