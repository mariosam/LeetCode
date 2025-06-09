<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LexicographicalNumbers {    

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function lexicalOrder($n) {
        $list = [];
        $curr = 1;

        for ($i = 1; $i <= $n; $i++) {
            $list[] = $curr;
            if ($curr * 10 <= $n) {
                $curr *= 10;
            } else if ($curr % 10 != 9 && $curr + 1 <= $n) {
                $curr++;
            } else {
                while (intdiv($curr, 10) % 10 == 9) {
                    $curr = intdiv($curr, 10);
                }
                $curr = intdiv($curr, 10) + 1;
            }
        }

        return $list;
    }

}
