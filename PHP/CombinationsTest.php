<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CombinationsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("Combinations.php");

class CombinationsTest extends TestCase {

    public function testCombinations() {
        $obj = new Combinations();
        //Test 1
        $want = [[1,2],[1,3],[1,4],[2,3],[2,4],[3,4]];
        $got = $obj->combine(4, 2);
        echo "\nTest 1: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [[1]];
        $got = $obj->combine(1, 1);
        echo "\nTest 2: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
    }
}
