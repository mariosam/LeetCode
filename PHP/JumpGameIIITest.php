<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit JumpGameIIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("JumpGameIII.php");

class JumpGameIIITest extends TestCase {

    public function testJumpGameIII() {
        $obj = new JumpGameIII();
        //Test 1
        $want = true;
        $got = $obj->canReach( [4,2,3,0,3,1,2], 5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->canReach( [4,2,3,0,3,1,2], 0 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->canReach( [3,0,2,1,2], 2 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
