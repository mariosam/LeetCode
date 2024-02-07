<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class GroupAnagrams {    

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $hashmap = [];

        foreach ($strs as $str) {
            $tmp = str_split($str);
            sort($tmp);
            $sortStr = implode('', $tmp);
            $hashmap[$sortStr][] = $str;
        }

        return array_values($hashmap);
    }

}
