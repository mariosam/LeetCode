<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CompareVersionNumbers {    

    /**
     * @param String $version1
     * @param String $version2
     * @return Integer
     */
    function compareVersion($version1, $version2) {
        $i = 0;
        $j = 0;

        while ($i < strlen($version1) || $j < strlen($version2)) {
            $temp1 = 0;
            $temp2 = 0;

            while ($i < strlen($version1) && $version1[$i] != '.') {
                $temp1 = $temp1 * 10 + intval($version1[$i]);
                $i++;
            }

            while ($j < strlen($version2) && $version2[$j] != '.') {
                $temp2 = $temp2 * 10 + intval($version2[$j]);
                $j++;
            }

            if ($temp1 == $temp2) {
                $i++;
                $j++;
                continue;
            } else if ($temp1 < $temp2) {
                return -1;
            } else {
                return 1;
            }
        }

        return 0;
    }

}
