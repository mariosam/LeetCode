<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class JumpGameIII {    

    /**
     * @param Integer[] $arr
     * @param Integer $start
     * @return Boolean
     */
    function canReach($arr, $start) {
        $n = count($arr);
        $queue = [];
        $front = 0;
        $visited = array_fill(0, $n, false);
        $queue[] = $start;
        $visited[$start] = true;

        while ($front < count($queue)) {
            $cur = $queue[$front];
            $front++;
            if ($arr[$cur] == 0) {
                return true;
            }

            $next1 = $cur - $arr[$cur];
            $next2 = $cur + $arr[$cur];

            if ($next1 >= 0 && !$visited[$next1]) {
                $queue[] = $next1;
                $visited[$next1] = true;
            }

            if ($next2 < $n && !$visited[$next2]) {
                $queue[] = $next2;
                $visited[$next2] = true;
            }
        }
        return false;
    }

}
