<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfPushesToTypeWordIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfPushesToTypeWordII.php");

class MinimumNumberOfPushesToTypeWordIITest extends TestCase {

    public function testMinimumNumberOfPushesToTypeWordII() {
        $obj = new MinimumNumberOfPushesToTypeWordII();
        //Test 1
        $want = 5;
        $got = $obj->minimumPushes("abcde");
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->minimumPushes("xyzxyzxyzxyz");
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 24;
        $got = $obj->minimumPushes("aabbccddeeffgghhiiiiii");
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
