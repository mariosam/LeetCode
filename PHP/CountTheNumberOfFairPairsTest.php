<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountTheNumberOfFairPairsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountTheNumberOfFairPairs.php");

class CountTheNumberOfFairPairsTest extends TestCase {

    public function testCountTheNumberOfFairPairs() {
        $obj = new CountTheNumberOfFairPairs();
        //Test 1
        $want = 6;
        $got = $obj->countFairPairs( [0,1,7,4,4,5], 3, 6 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->countFairPairs( [1,7,9,2,5], 11, 11 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
