<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit HeightCheckerTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("HeightChecker.php");

class HeightCheckerTest extends TestCase {

    public function testHeightChecker() {
        $obj = new HeightChecker();
        //Test 1
        $want = 3;
        $got = $obj->heightChecker( [1,1,4,2,1,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 5;
        $got = $obj->heightChecker( [5,1,2,3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->heightChecker( [1,2,3,4,5] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
