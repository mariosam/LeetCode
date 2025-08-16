<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit Maximum69NumberTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("Maximum69Number.php");

class Maximum69NumberTest extends TestCase {

    public function testMaximum69Number() {
        $obj = new Maximum69Number();
        //Test 1
        $want = 9969;
        $got = $obj->maximum69Number( 9669 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 9999;
        $got = $obj->maximum69Number( 9996 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 9999;
        $got = $obj->maximum69Number( 9999 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
