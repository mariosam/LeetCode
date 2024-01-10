<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit AssignCookiesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("AssignCookies.php");

class AssignCookiesTest extends TestCase {

    public function testAssignCookies() {
        $obj = new AssignCookies();
        //Test 1
        $want = 1;
        $got = $obj->findContentChildren( [1,2,3], [1,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->findContentChildren( [1,2], [1,2,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
