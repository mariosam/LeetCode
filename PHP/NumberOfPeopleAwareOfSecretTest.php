<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfPeopleAwareOfSecretTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfPeopleAwareOfSecret.php");

class NumberOfPeopleAwareOfSecretTest extends TestCase {

    public function testNumberOfPeopleAwareOfSecret() {
        $obj = new NumberOfPeopleAwareOfSecret();
        //Test 1
        $want = 5;
        $got = $obj->peopleAwareOfSecret( 6, 2, 4 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->peopleAwareOfSecret( 4, 1, 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
