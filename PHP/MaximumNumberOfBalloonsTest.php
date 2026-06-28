<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumNumberOfBalloonsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumNumberOfBalloons.php");

class MaximumNumberOfBalloonsTest extends TestCase {

    public function testMaximumNumberOfBalloons() {
        $obj = new MaximumNumberOfBalloons();
        //Test 1
        $want = 1;
        $got = $obj->maxNumberOfBalloons( "nlaebolko" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->maxNumberOfBalloons( "loonbalxballpoon" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->maxNumberOfBalloons( "leetcode" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
