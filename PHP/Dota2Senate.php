<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class Dota2Senate {    

    /**
     * @param String $senate
     * @return String
     */
    function predictPartyVictory($senate) {
        $dire =  new SplQueue();
        $radiant = new SplQueue();
        $len = strlen($senate);

        for ($i = 0; $i < $len; $i++) {
            if ($senate[$i] == 'R') {
                $radiant->enqueue($i);
            } else {
                $dire->enqueue($i);
            }
        }
        
        while (!$radiant->isEmpty() && !$dire->isEmpty()) {
            $r = $radiant->dequeue();
            $d = $dire->dequeue();
            if ($r > $d) {
                $dire->enqueue($d + $len);
            } else {
                $radiant->enqueue($r + $len);
            }
        }
        
        return $dire->isEmpty() ? "Radiant" : "Dire";
    }

}
