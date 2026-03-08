<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindUniqueBinaryString {    

    /**
     * @param String[] $nums
     * @return String
     */
    function findDifferentBinaryString($nums) {
        $res = "";
        for ($i = 0; $i < count($nums); $i++) {
            // Pega o caractere da diagonal e inverte (se 0 vira 1, se 1 vira 0)
            $res .= $nums[$i][$i] == '0' ? '1' : '0';
        }
        return $res;
    }
}
