<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit AddingSpacesToStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("AddingSpacesToString.php");

class AddingSpacesToStringTest extends TestCase {

    public function testAddingSpacesToString() {
        $obj = new AddingSpacesToString();
        //Test 1
        $want = "Leetcode Helps Me Learn";
        $got = $obj->addSpaces( "LeetcodeHelpsMeLearn", [8,13,15] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "i code in py thon";
        $got = $obj->addSpaces( "icodeinpython", [1,5,7,9] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = " s p a c i n g";
        $got = $obj->addSpaces( "spacing", [0,1,2,3,4,5,6] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
