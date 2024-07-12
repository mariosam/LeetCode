<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ReverseSubstringsBetweenEachPairOfParenthesesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ReverseSubstringsBetweenEachPairOfParentheses.php");

class ReverseSubstringsBetweenEachPairOfParenthesesTest extends TestCase {

    public function testReverseSubstringsBetweenEachPairOfParentheses() {
        $obj = new ReverseSubstringsBetweenEachPairOfParentheses();
        //Test 1
        $want = "dcba";
        $got = $obj->reverseParentheses( "(abcd)" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "iloveu";
        $got = $obj->reverseParentheses( "(u(love)i)" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "leetcode";
        $got = $obj->reverseParentheses( "(ed(et(oc))el)" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
