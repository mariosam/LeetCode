<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountTheNumberOfComputerUnlockingPermutationsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountTheNumberOfComputerUnlockingPermutations.php");

class CountTheNumberOfComputerUnlockingPermutationsTest extends TestCase {

    public function testCountTheNumberOfComputerUnlockingPermutations() {
        $obj = new CountTheNumberOfComputerUnlockingPermutations();
        //Test 1
        $want = 2;
        $got = $obj->countPermutations( [1,2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countPermutations( [3,3,3,4,4,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
