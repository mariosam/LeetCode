<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfSubstringsWithOnly1sTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfSubstringsWithOnly1s.php");

class NumberOfSubstringsWithOnly1sTest extends TestCase {

    public function testNumberOfSubstringsWithOnly1s() {
        $obj = new NumberOfSubstringsWithOnly1s();
        //Test 1
        $want = 9;
        $got = $obj->numSub( "0110111" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->numSub( "101" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 21;
        $got = $obj->numSub( "111111" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
