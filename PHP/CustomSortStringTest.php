<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CustomSortStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CustomSortString.php");

class CustomSortStringTest extends TestCase {

    public function testCustomSortString() {
        $obj = new CustomSortString();
        //Test 1
        $want = "cbad";
        $got = $obj->customSortString( "cba", "abcd" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "bcad";
        $got = $obj->customSortString( "bcafg", "abcd" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
