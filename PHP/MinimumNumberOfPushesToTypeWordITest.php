<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfPushesToTypeWordITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfPushesToTypeWordI.php");

class MinimumNumberOfPushesToTypeWordITest extends TestCase {

    public function testMinimumNumberOfSwapsToMakeTheStringBalanced() {
        $obj = new MinimumNumberOfPushesToTypeWordI();
        //Test 1
        $want = 5;
        $got = $obj->minimumPushes("abcde");
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->minimumPushes("xycdefghij");
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
