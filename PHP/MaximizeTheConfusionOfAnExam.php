<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximizeTheConfusionOfAnExam {    

    /**
     * @param String $answerKey
     * @param Integer $k
     * @return Integer
     */
    function maxConsecutiveAnswers($answerKey, $k) {
        $get = function ($c, $k) use ($answerKey) {
            $l = -1;
            $r = -1;
            while ($r < strlen($answerKey) - 1) {
                $r++;
                if ($answerKey[$r] === $c) {
                    $k--;
                }
                if ($k < 0) {
                    $l++;
                    if ($answerKey[$l] === $c) {
                        $k++;
                    }
                }
            }
            return $r - $l;
        };
        return max($get('T', $k), $get('F', $k));
    }
}
