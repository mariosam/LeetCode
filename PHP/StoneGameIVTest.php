<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit StoneGameIVTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("StoneGameIV.php");

class StoneGameIVTest extends TestCase {

    public function testStoneGameIV() {
        $obj = new StoneGameIV();
        //Test 1
        $want = true;
        $got = $obj->winnerSquareGame(1);
        echo "\nTest 1: retornou " . ($got) . " == esperado: " . ($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->winnerSquareGame(2);
        echo "\nTest 2: retornou " . ($got) . " == esperado: " . ($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->winnerSquareGame(4);
        echo "\nTest 3: retornou " . ($got) . " == esperado: " . ($want);
        $this->assertEquals($want, $got);
    }
}
