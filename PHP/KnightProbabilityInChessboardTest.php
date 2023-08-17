<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KnightProbabilityInChessboardTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KnightProbabilityInChessboard.php");

class KnightProbabilityInChessboardTest extends TestCase {

    public function testKnightProbabilityInChessboard() {
        $obj = new KnightProbabilityInChessboard();
        //Test 1
        $want = 0.06250;
        $got = $obj->knightProbability( 3, 2, 0, 0 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1.00000;
        $got = $obj->knightProbability( 1, 0, 0, 0 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
