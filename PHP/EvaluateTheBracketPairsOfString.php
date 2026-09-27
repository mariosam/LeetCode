<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class EvaluateTheBracketPairsOfString {    

    /**
     * @param String $s
     * @param String[][] $knowledge
     * @return String
     */
    function evaluate($s, $knowledge) {
        if (strlen($s) == 1) {
            return $s;
        }
        $map = [];

        foreach ($knowledge as $info) {
            $key = $info[0];
            $value = $info[1];
            $map[$key] = $value;
        }
        $sb = '';
        $i = 0;
        $length = strlen($s);

        while ($i < $length) {
            $current = $s[$i];
            if ($current === ')') {
                $i++;
                continue;
            } elseif ($current !== '(') {
                $sb .= $current;
                $i++;
            } else {
                $key = '';
                $i++;

                while ($s[$i] !== ')') {
                    $key .= $s[$i];
                    $i++;
                }

                if (isset($map[$key])) {
                    $sb .= $map[$key];
                } else {
                    $sb .= '?';
                }
            }
        }
        return $sb;
    }

}
