<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BagOfTokensTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BagOfTokens.php");

class BagOfTokensTest extends TestCase {

    public function testBagOfTokens() {
        $obj = new BagOfTokens();
        //Test 1
        $want = 0;
        $got = $obj->bagOfTokensScore( [100], 50 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->bagOfTokensScore( [200,100], 150 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->bagOfTokensScore( [100,200,300,400], 200 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
