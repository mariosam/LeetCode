<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindUniqueBinaryStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindUniqueBinaryString.php");

class FindUniqueBinaryStringTest extends TestCase {

    public function testFindUniqueBinaryString() {
        $obj = new FindUniqueBinaryString();
        //Test 1
        $want = "11";
        $nums = ["01", "10"];
        $got = $obj->findDifferentBinaryString( $nums );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;

        $this->assertEquals(count($nums), strlen($got)); // Verifica tamanho
        $this->assertNotContains($got, $nums); // Verifica se é única
        //Test 2
        $want = "11";
        $nums = ["00", "01"];
        $got = $obj->findDifferentBinaryString( $nums );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;

        $this->assertEquals(count($nums), strlen($got));
        $this->assertNotContains($got, $nums);
        //Test 3
        $want = "101";
        $nums = ["111","011","001"];
        $got = $obj->findDifferentBinaryString( $nums );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;

        $this->assertEquals(count($nums), strlen($got));
        $this->assertNotContains($got, $nums);
    }
}
