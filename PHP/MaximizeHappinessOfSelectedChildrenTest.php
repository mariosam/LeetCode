<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximizeHappinessOfSelectedChildrenTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximizeHappinessOfSelectedChildren.php");

class MaximizeHappinessOfSelectedChildrenTest extends TestCase {

    public function testMaximizeHappinessOfSelectedChildren() {
        $obj = new MaximizeHappinessOfSelectedChildren();
        //Test 1
        $want = 4;
        $got = $obj->maximumHappinessSum( [1,2,3], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->maximumHappinessSum( [1,1,1,1], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 5;
        $got = $obj->maximumHappinessSum( [2,3,4,5], 1 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
