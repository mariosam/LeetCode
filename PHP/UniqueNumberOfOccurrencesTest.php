<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit UniqueNumberOfOccurrencesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("UniqueNumberOfOccurrences.php");

class UniqueNumberOfOccurrencesTest extends TestCase {

    public function testUniqueNumberOfOccurrences() {
        $obj = new UniqueNumberOfOccurrences();
        //Test 1
        $want = true;
        $got = $obj->uniqueOccurrences( [1,2,2,1,1,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->uniqueOccurrences( [1,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->uniqueOccurrences( [-3,0,1,-3,1,1,1,-3,10,0] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
