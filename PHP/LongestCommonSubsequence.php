<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestCommonSubsequence {    

    /**
     * @param String $text1
     * @param String $text2
     * @return Integer
     */
    function longestCommonSubsequence($text1, $text2) {
        $text1Array = str_split($text1);
        $text2Array = str_split($text2);
        $m = count($text1Array);
        $n = count($text2Array);
        $array = array_fill(0, $m, array_fill(0, $n, 0));

        // init
        $array[0][0] = $text1Array[0] == $text2Array[0] ? 1 : 0;
        for ($i = 1; $i < $m; $i++) {
            $array[$i][0] = max($array[$i - 1][0], $text1Array[$i] == $text2Array[0] ? 1 : 0);
        }
        for ($i = 1; $i < $n; $i++) {
            $array[0][$i] = max($array[0][$i - 1], $text2Array[$i] == $text1Array[0] ? 1 : 0);
        }

        // dp
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $array[$i][$j] = max($array[$i - 1][$j], $array[$i][$j - 1]);
                if ($text1Array[$i] == $text2Array[$j]) {
                    $array[$i][$j] = max($array[$i - 1][$j - 1] + 1, $array[$i][$j]);
                }
            }
        }

        return $array[$m - 1][$n - 1];
    }

}
