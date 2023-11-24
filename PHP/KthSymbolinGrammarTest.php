<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KthSymbolinGrammarTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KthSymbolinGrammar.php");

class KthSymbolinGrammarTest extends TestCase {

    public function testKthSymbolinGrammar() {
        $obj = new KthSymbolinGrammar();
        //Test 1
        $want = 0;
        $got = $obj->kthGrammar( 1, 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->kthGrammar( 2, 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->kthGrammar( 2, 2 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
