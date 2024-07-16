<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RobotCollisions {    

    /**
     * @param Integer[] $positions
     * @param Integer[] $healths
     * @param String $directions
     * @return Integer[]
     */
    function survivedRobotsHealths($positions, $healths, $directions) {
        $arr = [];
        foreach ($positions as $i => $p) {
            $arr[] = ['i' => $i, 'p' => $p, 'h' => $healths[$i], 'd' => $directions[$i]];
        }

        usort($arr, function($a, $b) {
            return $a['p'] <=> $b['p'];
        });

        $toLeft = [];
        $st = [];

        foreach ($arr as $p) {
            if ($p['d'] === 'R') {
                $st[] = $p;
                continue;
            }

            while (count($st) > 0) {
                $top = &$st[count($st) - 1];
                if ($top['h'] > $p['h']) {
                    $top['h']--;
                    break;
                }
                if ($top['h'] === $p['h']) {
                    array_pop($st);
                    $p['h'] = 0;
                    break;
                }
                $p['h']--;
                array_pop($st);
            }
            if (count($st) === 0 && $p['h'] !== 0) {
                $toLeft[] = $p;
            }
        }

        $toLeft = array_merge($toLeft, $st);
        usort($toLeft, function($a, $b) {
            return $a['i'] <=> $b['i'];
        });

        $res = [];
        foreach ($toLeft as $d) {
            $res[] = $d['h'];
        }
        return $res;
    }

}
