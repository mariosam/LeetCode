<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ReverseStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ReverseString.php");

class ReverseStringTest extends TestCase {

    public function testReverseString() {
        $obj = new ReverseString();
        //Test 1
        $want = ["o","l","l","e","h"];
        $got = $obj->reverseString( ["h","e","l","l","o"] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = ["h","a","n","n","a","H"];
        $got = $obj->reverseString( ["H","a","n","n","a","h"] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
