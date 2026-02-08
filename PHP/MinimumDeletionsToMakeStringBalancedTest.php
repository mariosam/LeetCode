<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumDeletionsToMakeStringBalancedTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumDeletionsToMakeStringBalanced.php");

class MinimumDeletionsToMakeStringBalancedTest extends TestCase {

    public function testMinimumDeletionsToMakeStringBalanced() {
        $obj = new MinimumDeletionsToMakeStringBalanced();
        //Test 1
        $want = 2;
        $got = $obj->minimumDeletions( "aababbab" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->minimumDeletions( "bbaaaaabb" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
