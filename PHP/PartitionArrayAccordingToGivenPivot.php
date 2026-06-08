<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PartitionArrayAccordingToGivenPivot {    

    /**
     * @param Integer[] $nums
     * @param Integer $pivot
     * @return Integer[]
     */
    function pivotArray($nums, $pivot) {
        $res = array_fill(0, count($nums), 0);
        $k = 0;

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] < $pivot) {
                $res[$k++] = $nums[$i];
            }
        }

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == $pivot) {
                $res[$k++] = $nums[$i];
            }
        }

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] > $pivot) {
                $res[$k++] = $nums[$i];
            }
        }
        return $res;
    }

}
