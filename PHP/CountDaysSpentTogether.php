<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountDaysSpentTogether {    

    /**
     * @param String $arriveAlice
     * @param String $leaveAlice
     * @param String $arriveBob
     * @param String $leaveBob
     * @return Integer
     */
    function countDaysTogether($arriveAlice, $leaveAlice, $arriveBob, $leaveBob) {
        $days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        if ($arriveAlice > $leaveBob || $arriveBob > $leaveAlice) {
            return 0;
        }

        if ($arriveAlice == $leaveBob || $arriveBob == $leaveAlice) {
            return 1;
        }
        $maxArrive = max($arriveAlice, $arriveBob);
        $minLeave = min($leaveAlice, $leaveBob);
        [$m1, $d1] = array_map('intval', explode('-', $maxArrive));
        [$m2, $d2] = array_map('intval', explode('-', $minLeave));

        if ($m1 == $m2) {
            return $d2 - $d1 + 1;
        }
        $res = $days[$m1 - 1] - $d1 + 1;

        for ($i = $m1 + 1; $i < $m2; $i++) {
            $res += $days[$i - 1];
        }
        $res += $d2;

        return $res;
    }
}
