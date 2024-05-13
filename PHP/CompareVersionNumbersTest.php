<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CompareVersionNumbersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CompareVersionNumbers.php");

class CompareVersionNumbersTest extends TestCase {

    public function testCompareVersionNumbers() {
        $obj = new CompareVersionNumbers();
        //Test 1
        $want = -1;
        $got = $obj->compareVersion( "1.2", "1.10" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->compareVersion( "1.01", "1.001" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->compareVersion( "1.0", "1.0.0.0" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
