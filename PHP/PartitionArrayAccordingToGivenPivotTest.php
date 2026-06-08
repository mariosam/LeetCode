<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PartitionArrayAccordingToGivenPivotTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PartitionArrayAccordingToGivenPivot.php");

class PartitionArrayAccordingToGivenPivotTest extends TestCase {

    public function testPartitionArrayAccordingToGivenPivot() {
        $obj = new PartitionArrayAccordingToGivenPivot();
        //Test 1
        $want = [9,5,3,10,10,12,14];
        $got = $obj->pivotArray( [9,12,5,10,14,3,10], 10 );
        echo "\nTest 1: retornou " . json_encode($got) . " == esperado: " . json_encode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [-3,2,4,3];
        $got = $obj->pivotArray( [-3,4,3,2], 2 );
        echo "\nTest 2: retornou " . json_encode($got) . " == esperado: " . json_encode($want);
        $this->assertEquals($want, $got);
    }
}
