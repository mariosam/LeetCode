<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SimplifyPath {    

    /**
     * @param String $path
     * @return String
     */
    function simplifyPath($path) {
        $stack = [];
        $arr = explode('/', $path);

        foreach ($arr as $item) {
            switch ($item) {
                case '.':
                case '':
                    break;
                case '..':
                    if (!empty($stack)) {
                        array_pop($stack);
                    }
                    break;
                default:
                    $stack[] = $item;
            }
        }
        
        return '/' . implode('/', $stack);
    }

}
