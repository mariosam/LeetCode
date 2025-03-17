<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DivideArrayIntoEqualPairsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DivideArrayIntoEqualPairs.php");

class DivideArrayIntoEqualPairsTest extends TestCase {

    public function testDivideArrayIntoEqualPairs() {
        $obj = new DivideArrayIntoEqualPairs();
        //Test 1
        $want = true;
        $got = $obj->divideArray( [3,2,3,2,2,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->divideArray( [1,2,3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
