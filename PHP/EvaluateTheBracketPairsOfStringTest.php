<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit EvaluateTheBracketPairsOfStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("EvaluateTheBracketPairsOfString.php");

class EvaluateTheBracketPairsOfStringTest extends TestCase {

    public function testEvaluateTheBracketPairsOfString() {
        $obj = new EvaluateTheBracketPairsOfString();
        //Test 1
        $want = "bobistwoyearsold";
        $got = $obj->evaluate( "(name)is(age)yearsold",  [["name","bob"],["age","two"]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "hi?";
        $got = $obj->evaluate( "hi(name)", [["a","b"]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "yesyesyesaaa";
        $got = $obj->evaluate( "(a)(a)(a)aaa",  [["a","yes"]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
