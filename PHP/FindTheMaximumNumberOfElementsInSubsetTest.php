<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheMaximumNumberOfElementsInSubsetTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheMaximumNumberOfElementsInSubset.php");

class FindTheMaximumNumberOfElementsInSubsetTest extends TestCase {

    public function testFindTheMaximumNumberOfElementsInSubset() {
        $obj = new FindTheMaximumNumberOfElementsInSubset();
        //Test 1
        $want = 3;
        $got = $obj->maximumLength( [5,4,1,2,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->maximumLength( [1,3,2,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
