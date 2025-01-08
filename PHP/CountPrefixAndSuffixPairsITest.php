<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountPrefixAndSuffixPairsITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountPrefixAndSuffixPairsI.php");

class CountPrefixAndSuffixPairsITest extends TestCase {

    public function testCountPrefixAndSuffixPairsI() {
        $obj = new CountPrefixAndSuffixPairsI();
        //Test 1
        $want = 4;
        $got = $obj->countPrefixSuffixPairs( ["a","aba","ababa","aa"] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->countPrefixSuffixPairs( ["pa","papa","ma","mama"] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countPrefixSuffixPairs( ["abab","ab"] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
