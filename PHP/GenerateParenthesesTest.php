<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit GenerateParenthesesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("GenerateParentheses.php");

class GenerateParenthesesTest extends TestCase {

    public function testGenerateParentheses() {
        $obj = new GenerateParentheses();
        //Test 1
        $want = ["((()))","(()())","(())()","()(())","()()()"];
        $got = $obj->generateParenthesis( 3 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = ["()"];
        $got = $obj->generateParenthesis( 1 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
