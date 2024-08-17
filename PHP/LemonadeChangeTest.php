<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LemonadeChangeTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LemonadeChange.php");

class LemonadeChangeTest extends TestCase {

    public function testLemonadeChange() {
        $obj = new LemonadeChange();
        //Test 1
        $want = true;
        $got = $obj->lemonadeChange( [5,5,5,10,20] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->lemonadeChange( [5,5,10,10,20] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
