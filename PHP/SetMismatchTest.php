<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SetMismatchTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SetMismatch.php");

class SetMismatchTest extends TestCase {

    public function testSetMismatch() {
        $obj = new SetMismatch();
        //Test 1
        $want = [2,3];
        $got = $obj->findErrorNums( [1,2,2,4] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [1,2];
        $got = $obj->findErrorNums( [1,1] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
