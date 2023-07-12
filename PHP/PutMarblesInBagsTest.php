<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PutMarblesInBagsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PutMarblesInBags.php");

class PutMarblesInBagsTest extends TestCase {

    public function testPutMarblesInBags() {
        $obj = new PutMarblesInBags();
        //Test 1
        $want = 4;
        $got = $obj->putMarbles( [1,3,5,1], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->putMarbles( [1,3], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
