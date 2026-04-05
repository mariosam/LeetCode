<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RobotReturnToOrigin {    

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {
        $x = 0;
        $y = 0;

        $n = strlen($moves);

        for ($i = 0; $i < $n; $i++) {
            $move = $moves[$i];

            if ($move === 'L') $x++;
            else if ($move === 'R') $x--;
            else if ($move === 'U') $y++;
            else if ($move === 'D') $y--;
        }

        return $x === 0 && $y === 0;
    }

}
