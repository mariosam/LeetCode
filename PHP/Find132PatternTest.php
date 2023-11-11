<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit Find132PatternTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("Find132Pattern.php");

class Find132PatternTest extends TestCase {

    public function testFind132Pattern() {
        $obj = new Find132Pattern();
        //Test 1
        $want = false;
        $got = $obj->find132pattern( [1,2,3,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->find132pattern( [3,1,4,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->find132pattern( [-1,3,2,0] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
