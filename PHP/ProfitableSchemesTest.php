<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ProfitableSchemesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ProfitableSchemes.php");

class ProfitableSchemesTest extends TestCase {

    public function testProfitableSchemes() {
        $obj = new ProfitableSchemes();
        //Test 1
        $want = 2;
        $got = $obj->profitableSchemes( 5, 3, [2,2], [2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 7;
        $got = $obj->profitableSchemes( 10, 5, [2,3,5], [6,7,8] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
