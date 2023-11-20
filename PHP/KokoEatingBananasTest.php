<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KokoEatingBananasTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KokoEatingBananas.php");

class KokoEatingBananasTest extends TestCase {

    public function testKokoEatingBananas() {
        $obj = new KokoEatingBananas();
        //Test 1
        $want = 4;
        $got = $obj->minEatingSpeed( [3, 6, 7, 11], 8 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 30;
        $got = $obj->minEatingSpeed( [30, 11, 23, 4, 20], 5 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 23;
        $got = $obj->minEatingSpeed( [30, 11, 23, 4, 20], 6 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = 1;
        $got = $obj->minEatingSpeed( [312884470], 968709470 );
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 5
        $want = 14;
        $got = $obj->minEatingSpeed( [332484035, 524908576, 855865114, 632922376, 222257295, 690155293, 112677673, 679580077, 337406589, 290818316, 877337160, 901728858, 679284947, 688210097, 692137887, 718203285, 629455728, 941802184], 823855818 );
        echo "\nTest 5: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
