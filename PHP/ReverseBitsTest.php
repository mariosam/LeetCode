<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ReverseBitsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ReverseBits.php");

class ReverseBitsTest extends TestCase {

    public function testReverseBits() {
        $obj = new ReverseBits();
        //Test 1
        $want = 964176192;
        $got = $obj->reverseBits( 43261596 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1073741822;
        $got = $obj->reverseBits( 2147483644 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
