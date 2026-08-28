<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SumGameTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SumGame.php");

class SumGameTest extends TestCase {

    public function testSumGame() {
        $obj = new SumGame();
        //Test 1
        $want = false;
        $got = $obj->sumGame("5023");
        echo "\nTest 1: retornou " . ($got ? 'true' : 'false') . " == esperado: " . ($want ? 'true' : 'false');
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->sumGame("25??");
        echo "\nTest 2: retornou " . ($got ? 'true' : 'false') . " == esperado: " . ($want ? 'true' : 'false');
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->sumGame("?3295???");
        echo "\nTest 3: retornou " . ($got ? 'true' : 'false') . " == esperado: " . ($want ? 'true' : 'false');
        $this->assertEquals($want, $got);
    }
}
