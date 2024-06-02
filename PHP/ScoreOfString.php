<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ScoreOfString {    

    /**
     * @param String $s
     * @return Integer
     */
    function scoreOfString($s) {
        $score = 0;
    
        for ($i = 1; $i < strlen($s); $i++) {
            $score += abs(ord($s[$i - 1]) - ord($s[$i]));
        }
        
        return $score;
    }

}
