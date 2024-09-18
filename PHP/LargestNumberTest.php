<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LargestNumberTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LargestNumber.php");

class LargestNumberTest extends TestCase {

    public function testLargestNumber() {
        $obj = new LargestNumber();
        //Test 1
        $want = "210";
        $got = $obj->largestNumber( [10,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "9534330";
        $got = $obj->largestNumber( [3,30,34,5,9] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
