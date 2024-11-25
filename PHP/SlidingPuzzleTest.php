<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SlidingPuzzleTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SlidingPuzzle.php");

class SlidingPuzzleTest extends TestCase {

    public function testSlidingPuzzle() {
        $obj = new SlidingPuzzle();
        //Test 1
        $want = 1;
        $got = $obj->slidingPuzzle( [[1,2,3],[4,0,5]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->slidingPuzzle( [[1,2,3],[5,4,0]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 5;
        $got = $obj->slidingPuzzle( [[4,1,2],[5,0,3]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
