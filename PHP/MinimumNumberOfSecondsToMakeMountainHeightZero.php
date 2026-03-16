<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfSecondsToMakeMountainHeightZero {    

    /**
     * @param Integer $mountainHeight
     * @param Integer[] $workerTimes
     * @return Integer
     */
    function minNumberOfSeconds($mountainHeight, $workerTimes) {
        $l = 1;
        $minWorker = min($workerTimes);
        $r = $minWorker * $mountainHeight * ($mountainHeight + 1) / 2;

        while ($l < $r) {
            $m = intdiv($l + $r, 2);

            if ($this->getReducedHeight($workerTimes, $m) < $mountainHeight) {
                $l = $m + 1;
            } else {
                $r = $m;
            }
        }

        return $l;
    }

    function getReducedHeight($workerTimes, $m) {
        $reducedHeight = 0;

        foreach ($workerTimes as $workerTime) {
            $reducedHeight += (int)((-1 + sqrt(1 + 8 * $m / $workerTime)) / 2);
        }

        return $reducedHeight;
    }
}
