<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class StringCompression {    

    /**
     * @param String[] $chars
     * @return Integer
     */
    function compress($chars) {
        if ( count($chars) < 2 ) return count($chars);
    
        $comp = $chars[0];
        $count = 1;
        $compressIdx = 0;
    
        for ( $i=1; $i <= count($chars); $i++ ) {
            if ( $i < count($chars) && $chars[$i] == $comp ) {
                $count++;
            } else {
                $chars[$compressIdx] = $comp;
                $compressIdx++;
    
                if ( $count > 1 ) {
                    $countStr = strval($count);
                    for ( $j=0; $j < strlen($countStr); $j++ ) {
                        $chars[$compressIdx+$j] = $countStr[$j];
                    }
                    $compressIdx += strlen($countStr);
                }
    
                if ( $i < count($chars) ) $comp = $chars[$i];

                $count = 1;
            }
        }
    
        return $compressIdx;
    }

}
