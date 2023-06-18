<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ValidateStackSequences {    

    /**
     * @param Integer[] $pushed
     * @param Integer[] $popped
     * @return Boolean
     */
    function validateStackSequences($pushed, $popped) {
        if (count($pushed) <= 1) return true;
        $stack = [];
        $popIndex = 0;

        for ($i=0; $i < count($pushed); $i++) {
            array_push($stack,$pushed[$i]);
            while (count($stack) && $stack[count($stack) - 1] == $popped[$popIndex]) {
                array_pop($stack);
                $popIndex++;
            }
        }

        return count($stack) == 0;
    }
}
