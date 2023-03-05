<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit StringCompressionTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("StringCompression.php");

class StringCompressionTest extends TestCase {

    public function testStringCompression() {
        $obj = new StringCompression();
        //Test 1
        $want = 6;
        $got = $obj->compress( ['a', 'a', 'b', 'b', 'c', 'c', 'c'] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->compress( ['a'] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->compress( ['a', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
