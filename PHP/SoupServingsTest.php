<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SoupServingsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SoupServings.php");

class SoupServingsTest extends TestCase {

    public function testSoupServings() {
        $obj = new SoupServings();
        //Test 1
        $want = 0.62500;
        $got = $obj->soupServings( 50 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0.71875;
        $got = $obj->soupServings( 100 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
