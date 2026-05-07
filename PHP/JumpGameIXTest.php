<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit JumpGameIXTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("JumpGameIX.php");

class JumpGameIXTest extends TestCase {

    public function testJumpGameIX() {
        $obj = new JumpGameIX();
        //Test 1
        $want = [2,2,3];
        $got = $obj->maxValue( [2,1,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = [3,3,3];
        $got = $obj->maxValue( [2,3,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
