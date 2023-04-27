<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BulbSwitcherTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BulbSwitcher.php");

class BulbSwitcherTest extends TestCase {

    public function testBulbSwitcher() {
        $obj = new BulbSwitcher();
        //Test 1
        $want = 1;
        $got = $obj->bulbSwitch( 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->bulbSwitch( 0 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->bulbSwitch( 1 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
