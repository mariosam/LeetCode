<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BestTimeToBuyAndSellStockUsingStrategyTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BestTimeToBuyAndSellStockUsingStrategy.php");

class BestTimeToBuyAndSellStockUsingStrategyTest extends TestCase {

    public function testBestTimeToBuyAndSellStockUsingStrategy() {
        $obj = new BestTimeToBuyAndSellStockUsingStrategy();
        //Test 1
        $want = 10;
        $got = $obj->maxProfit( [4,2,8], [-1,0,1], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 9;
        $got = $obj->maxProfit( [5,4,3], [1,1,0], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
