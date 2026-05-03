<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit AdjacentIncreasingSubarraysDetectionIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("AdjacentIncreasingSubarraysDetectionII.php");

class AAdjacentIncreasingSubarraysDetectionIITest extends TestCase {

    public function testAdjacentIncreasingSubarraysDetectionII() {
        $obj = new AdjacentIncreasingSubarraysDetectionII();
        //Test 1
        $want = 3;
        $got = $obj->maxIncreasingSubarrays( [2,5,7,8,9,2,3,4,3,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->maxIncreasingSubarrays( [1,2,3,4,4,4,4,5,6,7] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
