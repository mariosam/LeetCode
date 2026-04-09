<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DecodeTheSlantedCiphertextTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DecodeTheSlantedCiphertext.php");

class DecodeTheSlantedCiphertextTest extends TestCase {

    public function testDecodeTheSlantedCiphertext() {
        $obj = new DecodeTheSlantedCiphertext();
        //Test 1
        $want = "cipher";
        $got = $obj->decodeCiphertext( "ch   ie   pr", 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "i love leetcode";
        $got = $obj->decodeCiphertext( "iveo    eed   l te   olc", 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "coding";
        $got = $obj->decodeCiphertext( "coding", 1 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
