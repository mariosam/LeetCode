<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PalindromeNumberTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PalindromeNumber.php");

class PalindromeNumberTest extends TestCase {

    public function testPalindromeNumber() {
        $obj = new PalindromeNumber();
        //Test 1
        $want = true;
        $got = $obj->isPalindrome( 121 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->isPalindrome( -121 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->isPalindrome( 10 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
