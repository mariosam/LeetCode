<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ConcatenateNonZeroDigitsAndMultiplyBySumITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ConcatenateNonZeroDigitsAndMultiplyBySumI.php");

class ConcatenateNonZeroDigitsAndMultiplyBySumITest extends TestCase {

    public function testConcatenateNonZeroDigitsAndMultiplyBySumI() {
        $obj = new ConcatenateNonZeroDigitsAndMultiplyBySumI();
        //Test 1
        $want = 12340;
        $got = $obj->sumAndMultiply( 10203004 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->sumAndMultiply( 1000 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
