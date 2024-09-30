<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DifferentWaysToAddParenthesesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DifferentWaysToAddParentheses.php");

class DifferentWaysToAddParenthesesTest extends TestCase {

    public function testDifferentWaysToAddParentheses() {
        $obj = new DifferentWaysToAddParentheses();
        //Test 1
        $want = [0,2];
        $got = $obj->closeStrings( "2-1-1" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = [-34,-14,-10,-10,10];
        $got = $obj->closeStrings( "2*3-4*5" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
