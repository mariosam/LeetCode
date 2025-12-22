<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DeleteColumnsToMakeSortedIII {    

    /**
     * @param String[] $strs
     * @return Integer
     */
    function minDeletionSize($strs) {
        $n = strlen($strs[0]);
        $f = array_fill(0, $n, 1);

        for ($i = 1; $i < $n; $i++) {
            for ($j = 0; $j < $i; $j++) {
                $ok = true;
                foreach ($strs as $s) {
                    if ($s[$j] > $s[$i]) {
                        $ok = false;
                        break;
                    }
                }
                if ($ok) {
                    $f[$i] = max($f[$i], $f[$j] + 1);
                }
            }
        }

        return $n - max($f);
    }

}
