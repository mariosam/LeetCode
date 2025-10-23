<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CheckIfDigitsAreEqualInStringAfterOperationsITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CheckIfDigitsAreEqualInStringAfterOperationsI.php");

class CheckIfDigitsAreEqualInStringAfterOperationsITest extends TestCase {

    public function testCheckIfDigitsAreEqualInStringAfterOperationsI() {
        $obj = new CheckIfDigitsAreEqualInStringAfterOperationsI();
        //Test 1
        $want = true;
        $got = $obj->hasSameDigits( "3902" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->hasSameDigits( "34789" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
