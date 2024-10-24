<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ParsingABooleanExpressionTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ParsingABooleanExpression.php");

class ParsingABooleanExpressionTest extends TestCase {

    public function testParsingABooleanExpression() {
        $obj = new ParsingABooleanExpression();
        //Test 1
        $want = false;
        $got = $obj->parseBoolExpr( "&(|(f))" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->parseBoolExpr( "|(f,f,f,t)" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->parseBoolExpr( "!(&(f,t))" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
