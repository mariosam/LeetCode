<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SortTheJumbledNumbersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SortTheJumbledNumbers.php");

class SortTheJumbledNumbersTest extends TestCase {

    public function testSortTheJumbledNumbers() {
        $obj = new SortTheJumbledNumbers();
        //Test 1
        $want = [338,38,991];
        $got = $obj->sortJumbled( [8,9,4,0,2,1,3,5,7,6], [991,338,38] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [123,456,789];
        $got = $obj->sortJumbled( [0,1,2,3,4,5,6,7,8,9], [789,456,123] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
