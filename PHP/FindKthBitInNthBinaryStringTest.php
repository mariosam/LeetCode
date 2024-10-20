<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindKthBitInNthBinaryStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindKthBitInNthBinaryString.php");

class FindKthBitInNthBinaryStringTest extends TestCase {

    public function testFindKthBitInNthBinaryString() {
        $obj = new FindKthBitInNthBinaryString();
        //Test 1
        $want = "0";
        $got = $obj->findKthBit( 3, 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "1";
        $got = $obj->findKthBit( 4, 11 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
