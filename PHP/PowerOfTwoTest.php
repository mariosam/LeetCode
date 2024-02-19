<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PowerOfTwoTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PowerOfTwo.php");

class PowerOfTwoTest extends TestCase {

    public function testPowerOfTwo() {
        $obj = new PowerOfTwo();
        //Test 1
        $want = true;
        $got = $obj->isPowerOfTwo( 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->isPowerOfTwo( 16 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->isPowerOfTwo( 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
