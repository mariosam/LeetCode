<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ConstructStringWithRepeatLimit {    

    /**
     * @param String $s
     * @param Integer $repeatLimit
     * @return String
     */
    function repeatLimitedString($s, $repeatLimit) {
        $freq = array_fill(0, 26, 0);
        $result = "";

        for ($i = 0; $i < strlen($s); $i++) {
            $freq[ord($s[$i]) - ord('a')]++;
        }

        for ($i = 25; $i >= 0; $i--) {
            if ($freq[$i] === 0) continue;
            $j = min($freq[$i], $repeatLimit);
            while ($j-- > 0) {
                $result .= chr(ord('a') + $i);
                $freq[$i]--;
            }
            if ($freq[$i] === 0) continue;
            $k = $i - 1;
            while ($k >= 0 && $freq[$k] === 0) {
                $k--;
            }
            if ($k === -1) return $result;
            $result .= chr(ord('a') + $k);
            $freq[$k]--;
            $i++; // Keep `i` in the same position
        }

        return $result;
    }

}
