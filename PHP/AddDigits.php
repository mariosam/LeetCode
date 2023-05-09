<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AddDigits {    

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        return ($num-1)%9 + 1;
    }

}
