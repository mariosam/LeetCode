<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SpecialArrayITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SpecialArrayI.php");

class SpecialArrayITest extends TestCase {

    public function testSpecialArrayI() {
        $obj = new SpecialArrayI();
        //Test 1
        $want = true;
        $got = $obj->isArraySpecial( [1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->isArraySpecial( [2,1,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->isArraySpecial( [4,3,1,6] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
