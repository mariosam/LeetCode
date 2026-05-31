<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DestroyingAsteroidsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DestroyingAsteroids.php");

class DestroyingAsteroidsTest extends TestCase {

    public function testDetermineIfTwoStringsAreClose() {
        $obj = new DestroyingAsteroids();
        //Test 1
        $want = true;
        $got = $obj->asteroidsDestroyed( 10, [3,9,19,5,21] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->asteroidsDestroyed( 5, [4,9,23,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
