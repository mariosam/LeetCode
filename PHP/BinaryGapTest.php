<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BinaryGapTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BinaryGap.php");

class BinaryGapTest extends TestCase {

    public function testBinaryGap() {
        $obj = new BinaryGap();
        //Test 1
        $want = 2;
        $got = $obj->binaryGap( 22 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->binaryGap( 8 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
