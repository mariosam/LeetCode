<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CheckIfaParenthesesStringCanBeValidTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CheckIfaParenthesesStringCanBeValid.php");

class CheckIfaParenthesesStringCanBeValidTest extends TestCase {

    public function testCheckIfaParenthesesStringCanBeValid() {
        $obj = new CheckIfaParenthesesStringCanBeValid();
        //Test 1
        $want = true;
        $got = $obj->canBeValid( "))()))", "010100" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->canBeValid( "()()", "0000" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->canBeValid( ")", "0" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
