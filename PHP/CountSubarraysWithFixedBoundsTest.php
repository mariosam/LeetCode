<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountSubarraysWithFixedBoundsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountSubarraysWithFixedBounds.php");

class CountSubarraysWithFixedBoundsTest extends TestCase {

    public function testCountSubarraysWithFixedBounds() {
        $obj = new CountSubarraysWithFixedBounds();
        //Test 1
        $want = 2;
        $got = $obj->countSubarrays( [1, 3, 5, 2, 7, 5], 1, 5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 10;
        $got = $obj->countSubarrays( [1, 1, 1, 1], 1, 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
