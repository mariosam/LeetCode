<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SignOfTheProductOfAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SignOfTheProductOfAnArray.php");

class SignOfTheProductOfAnArrayTest extends TestCase {

    public function testSignOfTheProductOfAnArray() {
        $obj = new SignOfTheProductOfAnArray();
        //Test 1
        $want = 1;
        $got = $obj->arraySign( [-1,-2,-3,-4,3,2,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->arraySign( [1,5,0,2,-3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->arraySign( [-1,1,-1,1,-1] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
