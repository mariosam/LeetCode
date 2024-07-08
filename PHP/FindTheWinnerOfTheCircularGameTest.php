<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheWinnerOfTheCircularGameTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheWinnerOfTheCircularGame.php");

class FindTheWinnerOfTheCircularGameTest extends TestCase {

    public function testFindTheWinnerOfTheCircularGame() {
        $obj = new FindTheWinnerOfTheCircularGame();
        //Test 1
        $want = 3;
        $got = $obj->findTheWinner( 5, 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->findTheWinner( 6, 5 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
