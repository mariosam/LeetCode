<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfPeopleToTeachTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfPeopleToTeach.php");

class MinimumNumberOfPeopleToTeachTest extends TestCase {

    public function testMinimumNumberOfSwapsToMakeTheStringBalanced() {
        $obj = new MinimumNumberOfPeopleToTeach();
        //Test 1
        $want = 1;
        $got = $obj->minimumTeachings([[1],[2],[1,2]], [[1,2],[1,3],[2,3]]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->minimumTeachings([[2],[1,3],[1,2],[3]], [[1,4],[1,2],[3,4],[2,3]]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
