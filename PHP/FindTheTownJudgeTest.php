<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheTownJudgeTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheTownJudge.php");

class FindTheTownJudgeTest extends TestCase {

    public function testFindTheTownJudge() {
        $obj = new FindTheTownJudge();
        //Test 1
        $want = 2;
        $got = $obj->findJudge( 2, [[1,2]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->findJudge( 3, [[1,3],[2,3]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->findJudge( 3, [[1,3],[2,3],[3,1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
