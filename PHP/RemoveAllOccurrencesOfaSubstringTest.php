<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RemoveAllOccurrencesOfaSubstringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RemoveAllOccurrencesOfaSubstring.php");

class RemoveAllOccurrencesOfaSubstringTest extends TestCase {

    public function testRemoveAllOccurrencesOfaSubstring() {
        $obj = new RemoveAllOccurrencesOfaSubstring();
        //Test 1
        $want = "dab";
        $got = $obj->removeOccurrences( "daabcbaabcbc", "abc" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "ab";
        $got = $obj->removeOccurrences( "axxxxyyyyb", "xy" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
