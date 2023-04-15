<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit OptimalPartitionOfStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("OptimalPartitionOfString.php");

class OptimalPartitionOfStringTest extends TestCase {

    public function testOptimalPartitionOfString() {
        $obj = new OptimalPartitionOfString();
        //Test 1
        $want = 4;
        $got = $obj->partitionString( "abacaba" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->partitionString( "ssssss" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
