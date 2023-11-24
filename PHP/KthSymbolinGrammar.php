<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KthSymbolinGrammar {    

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer
     */
    function kthGrammar($n, $k) {
        if ($k == 1) {
            return 0;
        }

        if ($k % 2 == 0) {
            $r = $this->kthGrammar($n, $k / 2);
            if ($r == 0) {
                $r = 1;
            } else if ($r == 1) {
                $r = 0;
            }
            return $r;
        }

        return $this->kthGrammar($n, ($k + 1) / 2);
    }

}
