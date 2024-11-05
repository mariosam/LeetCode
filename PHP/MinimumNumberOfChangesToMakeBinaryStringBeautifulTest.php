<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfChangesToMakeBinaryStringBeautifulTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfChangesToMakeBinaryStringBeautiful.php");

class MinimumNumberOfChangesToMakeBinaryStringBeautifulTest extends TestCase {

    public function testMinimumNumberOfChangesToMakeBinaryStringBeautiful() {
        $obj = new MinimumNumberOfChangesToMakeBinaryStringBeautiful();
        //Test 1
        $want = 2;
        $got = $obj->minChanges( "1001" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->minChanges( "10" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->minChanges( "0000" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
