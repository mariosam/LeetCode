<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit AsteroidCollisionTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("AsteroidCollision.php");

class AsteroidCollisionTest extends TestCase {

    public function testAsteroidCollision() {
        $obj = new AsteroidCollision();
        //Test 1
        $want = [5,10];
        $got = $obj->asteroidCollision( [5,10,-5] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [];
        $got = $obj->asteroidCollision( [8,-8] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [10];
        $got = $obj->asteroidCollision( [10,2,-5] );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
