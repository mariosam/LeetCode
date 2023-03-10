<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ZigzagConversion {    

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $totalDiff = $numRows * 2 - 2;
        if (!$s || strlen($s) <= $numRows || $numRows < 2 ) return $s;

        $result = "";
        $upDiff = $totalDiff;
        $downDiff = $totalDiff - $upDiff;

        for ( $i = 0; $i < $numRows; $i++ ) {
            $currChar = $downDiff / 2;
            $isGoingUp = true;
            
            while ( $currChar < strlen($s) ) {
                $result .= $s[$currChar];
                
                if ( $i == 0 || $i == ($numRows - 1) ) {
                    $currChar += $totalDiff;
                } else {
                    $currChar = $isGoingUp ? $currChar + $upDiff : $currChar + $downDiff;
                    $isGoingUp = !$isGoingUp;
                }
            }
            $upDiff -= 2;
            $downDiff = $totalDiff - $upDiff;
        }

        return $result;
    }

}
