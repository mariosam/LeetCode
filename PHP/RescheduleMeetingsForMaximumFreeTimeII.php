<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RescheduleMeetingsForMaximumFreeTimeII {    

    /**
     * @param Integer $eventTime
     * @param Integer[] $startTime
     * @param Integer[] $endTime
     * @return Integer
     */
    function maxFreeTime($eventTime, $startTime, $endTime) {
        $n = count($startTime);

        $get = function($i) use ($n, $eventTime, $startTime, $endTime) {
            if ($i == 0) return $startTime[0];
            else if ($i == $n) return $eventTime - $endTime[$i - 1];
            return $startTime[$i] - $endTime[$i - 1];
        };

        $a = 0; $b = -1; $c = -1;
        for ($i = 1; $i <= $n; $i++) {
            $sz = $get($i);
            if ($sz > $get($a)) {
                [$a, $b, $c] = [$i, $a, $b];
            } else if ($b < 0 || $sz > $get($b)) {
                [$b, $c] = [$i, $b];
            } else if ($c < 0 || $sz > $get($c)) {
                $c = $i;
            }
        }

        $ans = 0;
        for ($i = 0; $i < $n; $i++) {
            $s = $startTime[$i];
            $e = $endTime[$i];
            $sz = $e - $s;
            if (($i != $a && $i + 1 != $a && $get($a) >= $sz) ||
                ($i != $b && $i + 1 != $b && $get($b) >= $sz) ||
                ($i != $c && $i + 1 != $c && $get($c) >= $sz)) {
                $ans = max($ans, $get($i) + $get($i + 1) + $sz);
            } else {
                $ans = max($ans, $get($i) + $get($i + 1));
            }
        }

        return $ans;
    }

}
