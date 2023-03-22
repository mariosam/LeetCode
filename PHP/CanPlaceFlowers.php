<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CanPlaceFlowers {    

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        for ( $i=0; $i < count($flowerbed) && $n > 0; $i++ ) {
		    if ( $flowerbed[$i] == 0 &&	$flowerbed[$i-1] != 1 && $flowerbed[$i+1] != 1 ) {
			    $n--;
			    $i++;
		    }
	    }

	    return $n == 0;
    }

}
