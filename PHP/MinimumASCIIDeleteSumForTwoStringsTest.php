<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumASCIIDeleteSumForTwoStringsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumASCIIDeleteSumForTwoStrings.php");

class MinimumASCIIDeleteSumForTwoStringsTest extends TestCase {

    public function testMinimumASCIIDeleteSumForTwoStrings() {
        $obj = new MinimumASCIIDeleteSumForTwoStrings();
        //Test 1
        $want = 231;
        $got = $obj->minimumDeleteSum( "sea", "eat" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 403;
        $got = $obj->minimumDeleteSum( "delete", "leet" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
