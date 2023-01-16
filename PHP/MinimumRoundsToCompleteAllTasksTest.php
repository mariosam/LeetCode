<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumRoundsToCompleteAllTasksTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumRoundsToCompleteAllTasks.php");

class MinimumRoundsToCompleteAllTasksTest extends TestCase {

    public function testMinimumRoundsToCompleteAllTasks() {
        $obj = new MinimumRoundsToCompleteAllTasks();
        //Test 1
        $want = 4;
        $got = $obj->minimumRounds( [2,2,3,3,2,4,4,4,4,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->minimumRounds( [2,3,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 20;
        $got = $obj->minimumRounds( [69,65,62,64,70,68,69,67,60,65,69,62,65,65,61,66,68,61,65,63,60,66,68,66,67,65,63,65,70,69,70,62,68,70,60,68,65,61,64,65,63,62,62,62,67,62,62,61,66,69] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = -1;
        $got = $obj->minimumRounds( [1,2,1] );
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
