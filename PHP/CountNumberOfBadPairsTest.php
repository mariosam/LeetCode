<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountNumberOfBadPairsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountNumberOfBadPairs.php");

class CountNumberOfBadPairsTest extends TestCase {

    public function testCountNumberOfBadPairs() {
        $obj = new CountNumberOfBadPairs();
        //Test 1
        $want = 5;
        $got = $obj->countBadPairs( [4,1,3,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countBadPairs( [1,2,3,4,5] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
