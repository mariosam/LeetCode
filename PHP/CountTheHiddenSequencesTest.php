<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountTheHiddenSequencesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountTheHiddenSequences.php");

class CountTheHiddenSequencesTest extends TestCase {

    public function testCountTheHiddenSequences() {
        $obj = new CountTheHiddenSequences();
        //Test 1
        $want = 2;
        $got = $obj->numberOfArrays( [1,-3,4], 1, 6 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->numberOfArrays( [3,-4,5,1,-2], -4, 5 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->numberOfArrays( [4,-7,2], 3, 6 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
