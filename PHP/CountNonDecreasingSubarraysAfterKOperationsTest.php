<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountNonDecreasingSubarraysAfterKOperationsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountNonDecreasingSubarraysAfterKOperations.php");

class CountNonDecreasingSubarraysAfterKOperationsTest extends TestCase {

    public function testCountNonDecreasingSubarraysAfterKOperations() {
        $obj = new CountNonDecreasingSubarraysAfterKOperations();
        //Test 1
        $want = 17;
        $got = $obj->countNonDecreasingSubarrays( [6,3,1,2,4,4], 7 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->countNonDecreasingSubarrays( [6,3,1,3,6], 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
