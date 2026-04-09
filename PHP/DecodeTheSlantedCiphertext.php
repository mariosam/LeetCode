<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DecodeTheSlantedCiphertext {    

    /**
     * @param String $encodedText
     * @param Integer $rows
     * @return String
     */
    function decodeCiphertext($encodedText, $rows) {
        $size = strlen($encodedText);
        if ($rows == 1 || $size <= 1) {
            return $encodedText;
        }

        $cols = intdiv($size, $rows);
        $posX = 0;
        $posY = 0;

        $ret = '';

        while ($posY < $cols) {
            $index = $posX * $cols + $posY;
            $ret .= $encodedText[$index];

            $posX++;
            $posY++;

            if ($posX >= $rows) {
                $posX = 0;
                $posY = $posY - $rows + 1;
            }
        }

        return rtrim($ret);
    }

}
