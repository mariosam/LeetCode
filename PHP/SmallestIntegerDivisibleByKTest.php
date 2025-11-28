<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SmallestIntegerDivisibleByKTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SmallestIntegerDivisibleByK.php");

class SmallestIntegerDivisibleByKTest extends TestCase {

    public function testSmallestIntegerDivisibleByK() {
        $obj = new SmallestIntegerDivisibleByK();
        //Test 1
        $want = 1;
        $got = $obj->smallestRepunitDivByK( 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->smallestRepunitDivByK( 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 3;
        $got = $obj->smallestRepunitDivByK( 3 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
