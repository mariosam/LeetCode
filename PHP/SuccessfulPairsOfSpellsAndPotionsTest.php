<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SuccessfulPairsOfSpellsAndPotionsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SuccessfulPairsOfSpellsAndPotions.php");

class SuccessfulPairsOfSpellsAndPotionsTest extends TestCase {

    public function testSuccessfulPairsOfSpellsAndPotions() {
        $obj = new SuccessfulPairsOfSpellsAndPotions();
        //Test 1
        $want = [4, 0, 3];
        $got = $obj->successfulPairs( [5,1,3], [1,2,3,4,5], 7 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [2, 0, 2];
        $got = $obj->successfulPairs( [3,1,2], [8,5,8], 16 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
