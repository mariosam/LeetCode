<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RotateStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RotateString.php");

class RotateStringTest extends TestCase {

    public function testRotateString() {
        $obj = new RotateString();
        //Test 1
        $want = true;
        $got = $obj->rotateString( "abcde", "cdeab" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->rotateString( "abcde", "abced" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
