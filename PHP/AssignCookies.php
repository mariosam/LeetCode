<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AssignCookies {    

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        if (empty($g) || empty($s)) {
            return 0;
        }
        sort($g);
        sort($s);
    
        $j = -1;
        for ($i = 0; $i < count($g); $i++) {
            while (true) {
                $j++;
                if ($j >= count($s)) {
                    return $i;
                }
                if ($s[$j] >= $g[$i]) {
                    break;
                }
            }
        }
    
        return count($g);
    }
}
