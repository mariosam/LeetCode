<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LengthOfLastWordTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheIndexOfTheFirstOccurrenceInString.php");

class FindTheIndexOfTheFirstOccurrenceInStringTest extends TestCase {

    public function testFindTheIndexOfTheFirstOccurrenceInString() {
        $obj = new FindTheIndexOfTheFirstOccurrenceInString();
        //Test 1
        $want = 0;
        $got = $obj->strStr( "sadbutsad", "sad" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->strStr( "leetcode", "leeto" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
