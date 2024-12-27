<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BestSightseeingPairTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BestSightseeingPair.php");

class BestSightseeingPairTest extends TestCase {

    public function testBestSightseeingPair() {
        $obj = new BestSightseeingPair();
        //Test 1
        $want = 11;
        $got = $obj->maxScoreSightseeingPair( [8,1,5,2,6] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->maxScoreSightseeingPair( [1,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
