<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfWaysToPaintN×3GridTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfWaysToPaintN×3Grid.php");

class NumberOfWaysToPaintN×3GridTest extends TestCase {

    public function testNumberOfWaysToPaintN×3Grid() {
        $obj = new NumberOfWaysToPaintN×3Grid();
        //Test 1
        $want = 12;
        $got = $obj->numOfWays( 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 30228214;
        $got = $obj->numOfWays( 5000 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
