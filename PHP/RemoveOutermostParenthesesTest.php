<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RemoveOutermostParenthesesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RemoveOutermostParentheses.php");

class RemoveOutermostParenthesesTest extends TestCase {

    public function testRemoveOutermostParentheses() {
        $obj = new RemoveOutermostParentheses();
        //Test 1
        $want = "()()()";
        $got = $obj->removeOuterParentheses( "(()())(())" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "()()()()(())";
        $got = $obj->removeOuterParentheses( "(()())(())(()(()))" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "";
        $got = $obj->removeOuterParentheses( "()()" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
