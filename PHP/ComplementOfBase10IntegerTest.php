<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ComplementOfBase10IntegerTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ComplementOfBase10Integer.php");

class ComplementOfBase10IntegerTest extends TestCase {

    public function testComplementOfBase10Integer() {
        $obj = new ComplementOfBase10Integer();
        //Test 1
        $want = 2;
        $got = $obj->bitwiseComplement( 5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->bitwiseComplement( 7 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 5;
        $got = $obj->bitwiseComplement( 10 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
