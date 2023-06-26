<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CanMakeArithmeticProgressionFromSequenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CanMakeArithmeticProgressionFromSequence.php");

class CanMakeArithmeticProgressionFromSequenceTest extends TestCase {

    public function testCanMakeArithmeticProgressionFromSequence() {
        $obj = new CanMakeArithmeticProgressionFromSequence();
        //Test 1
        $want = true;
        $got = $obj->canMakeArithmeticProgression( [3,5,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->canMakeArithmeticProgression( [1,2,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
