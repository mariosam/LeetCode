<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DistributeCandiesAmongChildrenIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DistributeCandiesAmongChildrenII.php");

class DistributeCandiesAmongChildrenIITest extends TestCase {

    public function testDistributeCandiesAmongChildrenII() {
        $obj = new DistributeCandiesAmongChildrenII();
        //Test 1
        $want = 3;
        $got = $obj->distributeCandies( 5, 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 10;
        $got = $obj->distributeCandies( 3, 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
