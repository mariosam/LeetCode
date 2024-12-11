<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MovePiecesToObtainStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MovePiecesToObtainString.php");

class MovePiecesToObtainStringTest extends TestCase {

    public function testMovePiecesToObtainString() {
        $obj = new MovePiecesToObtainString();
        //Test 1
        $want = true;
        $got = $obj->canChange( "_L__R__R_", "L______RR" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->canChange( "R_L_", "__LR" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->canChange( "_R", "R_" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
