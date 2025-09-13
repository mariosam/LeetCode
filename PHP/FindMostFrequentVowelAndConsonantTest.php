<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindMostFrequentVowelAndConsonantTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindMostFrequentVowelAndConsonant.php");

class FindMostFrequentVowelAndConsonantTest extends TestCase {

    public function testFindMostFrequentVowelAndConsonant() {
        $obj = new FindMostFrequentVowelAndConsonant();
        //Test 1
        $want = 6;
        $got = $obj->maxFreqSum( "successes" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->maxFreqSum( "aeiaeia" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
