<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfSwapsToMakeTheStringBalancedTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfSwapsToMakeTheStringBalanced.php");

class MinimumNumberOfSwapsToMakeTheStringBalancedTest extends TestCase {

    public function testMinimumNumberOfSwapsToMakeTheStringBalanced() {
        $obj = new MinimumNumberOfSwapsToMakeTheStringBalanced();
        //Test 1
        $want = 1;
        $got = $obj->minSwaps( "][][" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->minSwaps( "]]][[[" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->minSwaps( "[]" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
