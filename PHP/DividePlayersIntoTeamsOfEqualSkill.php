<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DividePlayersIntoTeamsOfEqualSkill {    

    /**
     * @param Integer[] $skill
     * @return Integer
     */
    function dividePlayers($skill) {
        $s = array_sum($skill);
        $m = count($skill) / 2;

        if ($s % $m != 0) {
            return -1;
        }

        $t = $s / $m;
        $d = array_fill(0, 1010, 0);
        $ans = 0;

        foreach ($skill as $v) {
            if ($d[$t - $v] > 0) {
                $ans += $v * ($t - $v);
                $d[$t - $v]--;
                $m--;
            } else {
                $d[$v]++;
            }
        }

        return $m == 0 ? $ans : -1;
    }

}
