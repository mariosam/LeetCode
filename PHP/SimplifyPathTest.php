<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SimplifyPathTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SimplifyPath.php");

class SimplifyPathTest extends TestCase {

    public function testSimplifyPath() {
        $obj = new SimplifyPath();
        //Test 1
        $want = "/home";
        $got = $obj->simplifyPath( "/home/" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "/";
        $got = $obj->simplifyPath( "/../" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "/home/foo";
        $got = $obj->simplifyPath( "/home//foo/" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
