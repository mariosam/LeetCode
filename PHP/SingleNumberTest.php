<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SingleNumberTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SingleNumber.php");

class SingleNumberTest extends TestCase {

    public function testSingleNumber() {
        $obj = new SingleNumber();
        //Test 1
        $want = 1;
        $got = $obj->singleNumber( [2,2,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->singleNumber( [4,1,2,1,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->singleNumber( [1] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
