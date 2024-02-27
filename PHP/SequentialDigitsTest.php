<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SequentialDigitsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SequentialDigits.php");

class SequentialDigitsTest extends TestCase {

    public function testSequentialDigits() {
        $obj = new SequentialDigits();
        //Test 1
        $want = [123,234];
        $got = $obj->sequentialDigits( 100, 300 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [1234,2345,3456,4567,5678,6789,12345];
        $got = $obj->sequentialDigits( 1000, 13000 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
