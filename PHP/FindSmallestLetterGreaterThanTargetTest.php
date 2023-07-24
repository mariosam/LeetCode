<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindSmallestLetterGreaterThanTargetTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindSmallestLetterGreaterThanTarget.php");

class FindSmallestLetterGreaterThanTargetTest extends TestCase {

    public function testFindSmallestLetterGreaterThanTarget() {
        $obj = new FindSmallestLetterGreaterThanTarget();
        //Test 1
        $want = "c";
        $got = $obj->nextGreatestLetter( ["c","f","j"], "a" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "f";
        $got = $obj->nextGreatestLetter( ["c","f","j"], "c" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "x";
        $got = $obj->nextGreatestLetter( ["x","x","y","y"], "z" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
