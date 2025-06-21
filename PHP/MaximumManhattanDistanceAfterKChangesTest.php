<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumManhattanDistanceAfterKChangesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumManhattanDistanceAfterKChanges.php");

class MaximumManhattanDistanceAfterKChangesTest extends TestCase {

    public function testMaximumManhattanDistanceAfterKChanges() {
        $obj = new MaximumManhattanDistanceAfterKChanges();
        //Test 1
        $want = 3;
        $got = $obj->maxDistance( "NWSE", 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->maxDistance( "NSWWEW", 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
