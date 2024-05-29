<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfStepsToReduceNumberInBinaryRepresentationToOneTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfStepsToReduceNumberInBinaryRepresentationToOne.php");

class NumberOfStepsToReduceNumberInBinaryRepresentationToOneTest extends TestCase {

    public function testNumberOfStepsToReduceNumberInBinaryRepresentationToOne() {
        $obj = new NumberOfStepsToReduceNumberInBinaryRepresentationToOne();
        //Test 1
        $want = 6;
        $got = $obj->numSteps( "1101" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->numSteps( "10" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->numSteps( "1" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
