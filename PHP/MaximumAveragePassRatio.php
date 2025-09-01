<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumAveragePassRatio {    

    /**
     * @param Integer[][] $classes
     * @param Integer $extraStudents
     * @return Float
     */
    function maxAverageRatio($classes, $extraStudents) {
        $getDiff = function($a, $b) {
            return ($a + 1) / ($b + 1) - $a / $b;
        };

        // Max heap using SplPriorityQueue
        $queue = new SplPriorityQueue();
        foreach ($classes as $c) {
            [$pass, $total] = $c;
            $queue->insert([$pass, $total], $getDiff($pass, $total));
        }

        while ($extraStudents > 0) {
            [$pass, $total] = $queue->extract();
            $pass++;
            $total++;
            $queue->insert([$pass, $total], $getDiff($pass, $total));
            $extraStudents--;
        }

        $sum = 0.0;
        foreach ($queue as $c) {
            [$pass, $total] = $c;
            $sum += $pass / $total;
        }

        return $sum / count($classes);
    }
}
