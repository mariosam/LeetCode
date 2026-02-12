<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestBalancedSubstringITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestBalancedSubstringI.php");

class LongestBalancedSubstringITest extends TestCase {

    public function testLongestBalancedSubstringI() {
        $obj = new LongestBalancedSubstringI();
        //Test 1
        $want = 4;
        $got = $obj->longestBalanced( "abbac" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->longestBalanced( "zzabccy" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->longestBalanced( "aba" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
