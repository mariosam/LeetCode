<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SeparateBlackAndWhiteBallsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SeparateBlackAndWhiteBalls.php");

class SeparateBlackAndWhiteBallsTest extends TestCase {

    public function testSeparateBlackAndWhiteBalls() {
        $obj = new SeparateBlackAndWhiteBalls();
        //Test 1
        $want = 1;
        $got = $obj->minimumSteps( "101" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->minimumSteps( "100" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->minimumSteps( "0111" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
