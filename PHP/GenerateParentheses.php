<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class GenerateParentheses {    

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $ans = [];
        $cur = '';

        $dfs = function($left, $right) use (&$dfs, &$ans, &$cur) {
            if ($left == 0 && $right == 0) {
                $ans[] = $cur;
                return;
            }

            if ($left > $right) {
                return;
            }

            if ($left > 0) {
                $cur .= '(';
                $dfs($left - 1, $right);
                $cur = substr($cur, 0, -1);
            }

            if ($right > 0) {
                $cur .= ')';
                $dfs($left, $right - 1);
                $cur = substr($cur, 0, -1);
            }
        };
        $dfs($n, $n);

        return $ans;
    }

}
