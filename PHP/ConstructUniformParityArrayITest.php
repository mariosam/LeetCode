<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ConstructUniformParityArrayITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ConstructUniformParityArrayI.php");

class ConstructUniformParityArrayITest extends TestCase {

    public function testConstructUniformParityArrayI() {
        $obj = new ConstructUniformParityArrayI();
        //Test 1
        $want = true;
        $got = $obj->uniformArray( [2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->uniformArray( [4,6] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
