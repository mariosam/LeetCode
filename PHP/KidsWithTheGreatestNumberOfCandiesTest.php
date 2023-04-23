<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KidsWithTheGreatestNumberOfCandiesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KidsWithTheGreatestNumberOfCandies.php");

class KidsWithTheGreatestNumberOfCandiesTest extends TestCase {

    public function testKidsWithTheGreatestNumberOfCandies() {
        $obj = new KidsWithTheGreatestNumberOfCandies();
        //Test 1
        $want = [true,true,true,false,true];
        $got = $obj->kidsWithCandies( [2,3,5,1,3], 3 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [true,false,false,false,false];
        $got = $obj->kidsWithCandies( [4,2,1,1,2], 1 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [true,false,true];
        $got = $obj->kidsWithCandies( [12,1,12], 10 );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
