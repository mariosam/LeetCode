<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit IsSubsequenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("IsSubsequence.php");

class IsSubsequenceTest extends TestCase {

    public function testIsSubsequence() {
        $obj = new IsSubsequence();
        //Test 1
        $want = true;
        $got = $obj->isSubsequence( "abc", "ahbgdc" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->isSubsequence( "axc", "ahbgdc" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
