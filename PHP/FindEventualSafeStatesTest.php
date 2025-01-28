<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindEventualSafeStatesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindEventualSafeStates.php");

class FindEventualSafeStatesTest extends TestCase {

    public function testFindEventualSafeStates() {
        $obj = new FindEventualSafeStates();
        //Test 1
        $want = [2,4,5,6];
        $got = $obj->eventualSafeNodes( [[1,2],[2,3],[5],[0],[5],[],[]] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertSame($want, $got);
        //Test 2
        $want = [4];
        $got = $obj->eventualSafeNodes( [[1,2,3,4],[1,2],[3,4],[0,4],[]] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertSame($want, $got);
    }
}
