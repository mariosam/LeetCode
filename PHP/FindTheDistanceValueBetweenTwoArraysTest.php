<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheDistanceValueBetweenTwoArraysTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheDistanceValueBetweenTwoArrays.php");

class FindTheDistanceValueBetweenTwoArraysTest extends TestCase {

    public function testFindTheDistanceValueBetweenTwoArrays() {
        $obj = new FindTheDistanceValueBetweenTwoArrays();
        //Test 1
        $want = 2;
        $got = $obj->findTheDistanceValue( [4,5,8], [10,9,1,8], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->findTheDistanceValue( [1,4,2,3], [-4,-3,6,10,20,30], 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->findTheDistanceValue( [2,1,100,3], [-5,-2,10,-3,7], 6 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
