<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DivideIntervalsIntoMinimumNumberOfGroups {    

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function minGroups($intervals) {
        $starts = [];
        $ends = [];
        
        // Fill the start and end arrays
        foreach ($intervals as $interval) {
            $starts[] = $interval[0];
            $ends[] = $interval[1];
        }

        // Sort the start and end arrays
        sort($starts);
        sort($ends);

        $groups = 0;
        $activeIntervals = 0;
        $i = 0;
        $j = 0;

        // Two-pointer approach
        while ($i < count($intervals)) {
            if ($starts[$i] <= $ends[$j]) {
                $activeIntervals++;
                $i++;
            } else {
                $activeIntervals--;
                $j++;
            }

            $groups = max($groups, $activeIntervals);
        }

        return $groups;
    }

}
