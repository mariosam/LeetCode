<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RemoveOutermostParentheses {    

    /**
     * @param String $s
     * @return String
     */
    function removeOuterParentheses($s) {
        $builder = "";
        $count = 1;

        for ($i = 1; $i < strlen($s); $i++) {
            $ch = $s[$i];

            if ($ch === '(') {
                $count++;
            } else {
                $count--;
            }

            if ($count === 0) {
                $i++;
                $count = 1;
                continue;
            } else {
                $builder .= $ch;
            }
        }
        return $builder;
    }

}
