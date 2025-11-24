<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BinaryPrefixDivisibleBy5Test.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BinaryPrefixDivisibleBy5.php");

class BinaryPrefixDivisibleBy5Test extends TestCase {

    public function testBinaryPrefixDivisibleBy5() {
        $obj = new BinaryPrefixDivisibleBy5();
        //Test 1
        $want = [true,false,false];
        $got = $obj->prefixesDivBy5( [0,1,1] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [false,false,false];
        $got = $obj->prefixesDivBy5( [1,1,1] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
