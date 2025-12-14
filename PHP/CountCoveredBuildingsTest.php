<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountCoveredBuildingsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountCoveredBuildings.php");

class CountCoveredBuildingsTest extends TestCase {

    public function testCountCoveredBuildings() {
        $obj = new CountCoveredBuildings();
        //Test 1
        $want = 1;
        $got = $obj->countCoveredBuildings( 3, [[1,2],[2,2],[3,2],[2,1],[2,3]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countCoveredBuildings( 3, [[1,1],[1,2],[2,1],[2,2]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->countCoveredBuildings( 5, [[1,3],[3,2],[3,3],[3,5],[5,3]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
