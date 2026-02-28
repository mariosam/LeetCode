<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ConcatenationOfConsecutiveBinaryNumbersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ConcatenationOfConsecutiveBinaryNumbers.php");

class ConcatenationOfConsecutiveBinaryNumbersTest extends TestCase {

    public function testConcatenationOfConsecutiveBinaryNumbers() {
        $obj = new ConcatenationOfConsecutiveBinaryNumbers();
        //Test 1
        $want = 1;
        $got = $obj->concatenatedBinary( 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 27;
        $got = $obj->concatenatedBinary( 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 505379714;
        $got = $obj->concatenatedBinary( 12 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
