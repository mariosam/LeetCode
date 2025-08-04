<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumFruitsHarvestedAfterAtMostKSteps {    

    /**
     * @param Integer[][] $fruits
     * @param Integer $startPos
     * @param Integer $k
     * @return Integer
     */
    function maxTotalFruits($fruits, $startPos, $k) {
        $max = $startPos;
        foreach ($fruits as $fruit) {
            $max = max($max, $fruit[0]);
        }

        $nums = array_fill(0, $max + 1, 0);
        foreach ($fruits as $fruit) {
            $nums[$fruit[0]] += $fruit[1];
        }

        $presum = array_fill(0, $max + 2, 0);
        for ($i = 1; $i < count($presum); $i++) {
            $presum[$i] = $presum[$i - 1] + $nums[$i - 1];
        }

        $res = 0;
        for ($i = 0; $i <= $startPos; $i++) {
            $leftDis = $startPos - $i;
            if ($leftDis > $k) continue;

            $left = $k - (2 * $leftDis);
            $maxRight = min($max, $startPos + $left);
            $res = max($res, $presum[$maxRight + 1] - $presum[$i]);

            $maxRight2 = min($max, $startPos + intval(($k - $leftDis) / 2));
            $res = max($res, $presum[$maxRight2 + 1] - $presum[$i]);
        }

        return $res;
    }
}
