<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumHeightTreesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumHeightTrees.php");

class MinimumHeightTreesTest extends TestCase {

    public function testMinimumHeightTrees() {
        $obj = new MinimumHeightTrees();
        //Test 1
        $want = [1];
        $got = $obj->findMinHeightTrees( 4, [[1,0],[1,2],[1,3]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = [3,4];
        $got = $obj->findMinHeightTrees( 6, [[3,0],[3,1],[3,2],[3,4],[5,4]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
