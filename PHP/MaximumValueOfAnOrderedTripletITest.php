<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumValueOfAnOrderedTripletITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumValueOfAnOrderedTripletI.php");

class MaximumValueOfAnOrderedTripletITest extends TestCase {

    public function testMaximumValueOfAnOrderedTripletI() {
        $obj = new MaximumValueOfAnOrderedTripletI();
        //Test 1
        $want = 77;
        $got = $obj->maximumTripletValue( [12,6,1,2,7] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 133;
        $got = $obj->maximumTripletValue( [1,10,3,4,19] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->maximumTripletValue( [1,2,3] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
