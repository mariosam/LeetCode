<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ConstructProductMatrixTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ConstructProductMatrix.php");

class ConstructProductMatrixTest extends TestCase {

    public function testConstructProductMatrix() {
        $obj = new ConstructProductMatrix();
        //Test 1
        $want = [[24,12],[8,6]];
        $got = $obj->constructProductMatrix( [[1,2],[3,4]] );
        echo "\nTest 1: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [[2],[0],[0]];
        $got = $obj->constructProductMatrix( [[12345],[2],[1]] );
        echo "\nTest 2: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
    }
}
