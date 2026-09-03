<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ConstructUniformParityArrayI {    

    /**
     * @param Integer[] $nums1
     * @return Boolean
     */
    function uniformArray($nums1) {
        $n = count($nums1);
        $evenCnt = 0;
        $oddCnt = 0;

        for ($i = 0; $i < $n; $i++) {
            if ($nums1[$i] % 2 == 0) {
                $evenCnt++;
            } else {
                $oddCnt++;
            }
        }

        return ($evenCnt >= 1 && $oddCnt >= 1) ||
            ($evenCnt == 0) ||
            ($oddCnt == 0);
    }

}
