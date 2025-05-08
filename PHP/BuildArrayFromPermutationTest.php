<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BuildArrayFromPermutationTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BuildArrayFromPermutation.php");

class BuildArrayFromPermutationTest extends TestCase {

    public function testBuildArrayFromPermutation() {
        $obj = new BuildArrayFromPermutation();
        //Test 1
        $want = [0,1,2,4,5,3];
        $got = $obj->buildArray( [0,2,1,5,3,4] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [4,5,0,1,2,3];
        $got = $obj->buildArray( [5,0,1,2,3,4] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
