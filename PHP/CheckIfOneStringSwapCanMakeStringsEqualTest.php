<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CanMakeArithmeticProgressionFromSequenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CheckIfOneStringSwapCanMakeStringsEqual.php");

class CheckIfOneStringSwapCanMakeStringsEqualTest extends TestCase {

    public function testCheckIfOneStringSwapCanMakeStringsEqual() {
        $obj = new CheckIfOneStringSwapCanMakeStringsEqual();
        //Test 1
        $want = true;
        $got = $obj->areAlmostEqual( "bank", "kanb" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->areAlmostEqual( "attack", "defend" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->areAlmostEqual( "kelb", "kelb" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
