<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit TakingMaximumEnergyFromTheMysticDungeonTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("TakingMaximumEnergyFromTheMysticDungeon.php");

class TakingMaximumEnergyFromTheMysticDungeonTest extends TestCase {

    public function testTakingMaximumEnergyFromTheMysticDungeon() {
        $obj = new TakingMaximumEnergyFromTheMysticDungeon();
        //Test 1
        $want = 3;
        $got = $obj->maximumEnergy( [5,2,-10,-5,1], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->maximumEnergy( [-2,-3,-1], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
