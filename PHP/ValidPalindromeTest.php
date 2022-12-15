<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ValidPalindromeTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ValidPalindrome.php");

class ValidPalindromeTest extends TestCase {

    public function testValidPalindrome() {
        $obj = new ValidPalindrome();
        //Test 1
        $want = true;
        $got = $obj->isPalindrome( "A man, a plan, a canal: Panama" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->isPalindrome( "race a car" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->isPalindrome( " " );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = true;
        $got = $obj->isPalindrome( "A man, a plan, a canal -- Panama" );
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 5
        $want = false;
        $got = $obj->isPalindrome( "0P" );
        echo "\nTest 5: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
