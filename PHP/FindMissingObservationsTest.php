<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindMissingObservationsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindMissingObservations.php");

class FindMissingObservationsTest extends TestCase {

    public function testFindMissingObservations() {
        $obj = new FindMissingObservations();
        //Test 1
        $want = [6,6];
        $got = $obj->missingRolls([3,2,4,3], 4, 2);
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [3,2,2,2];
        $got = $obj->missingRolls([1,5,6], 3, 4);
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [];
        $got = $obj->missingRolls([1,2,3,4], 6, 4);
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
