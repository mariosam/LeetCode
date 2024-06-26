<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ScoreOfStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ScoreOfString.php");

class ScoreOfStringTest extends TestCase {

    public function testScoreOfString() {
        $obj = new ScoreOfString();
        //Test 1
        $want = 13;
        $got = $obj->scoreOfString( "hello" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 50;
        $got = $obj->scoreOfString( "zaz" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
