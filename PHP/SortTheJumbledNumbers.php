<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SortTheJumbledNumbers {    

    /**
     * @param Integer[] $mapping
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortJumbled($mapping, $nums) {
        $items = [];
        foreach ($nums as $index => $item) {
            $mapped = $this->mapNumber($item, $mapping);
            $items[] = ['item' => $item, 'index' => $index, 'mapped' => $mapped];
        }
        usort($items, function ($a, $b) {
            if ($a['mapped'] !== $b['mapped']) {
                return $a['mapped'] - $b['mapped'];
            }
            return $a['index'] - $b['index'];
        });
        return array_map(function ($item) {
            return $item['item'];
        }, $items);
    }

    function mapNumber($number, $mapping) {
        $numStr = strval($number);
        $mappedStr = '';
        for ($i = 0; $i < strlen($numStr); $i++) {
            $mappedStr .= $mapping[intval($numStr[$i])];
        }
        return intval($mappedStr);
    }

}
