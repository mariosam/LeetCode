<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PredictTheWinnerTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PredictTheWinner.php");

class PredictTheWinnerTest extends TestCase {

    public function testPredictTheWinner() {
        $obj = new PredictTheWinner();
        //Test 1
        $want = false;
        $got = $obj->PredictTheWinner( [1,5,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->PredictTheWinner( [1,5,233,7] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
