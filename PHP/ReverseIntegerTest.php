<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ReverseIntegerTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ReverseInteger.php");

class ReverseIntegerTest extends TestCase {

    public function testReverseInteger() {
        $obj = new ReverseInteger();
        //Test 1
        $want = 321;
        $got = $obj->reverse( 123 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -321;
        $got = $obj->reverse( -123 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 21;
        $got = $obj->reverse( 120 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
