<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ZigzagConversionTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ZigzagConversion.php");

class ZigzagConversionTest extends TestCase {

    public function testZigzagConversion() {
        $obj = new ZigzagConversion();
        //Test 1
        $want = "PAHNAPLSIIGYIR";
        $got = $obj->convert( "PAYPALISHIRING", 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "PINALSIGYAHRPI";
        $got = $obj->convert( "PAYPALISHIRING", 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "A";
        $got = $obj->convert( "A", 1 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
