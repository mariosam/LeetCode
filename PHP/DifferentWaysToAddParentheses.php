<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DifferentWaysToAddParentheses {    

    /**
     * @param String $expression
     * @return Integer[]
     */
    function diffWaysToCompute($expression) {
        $result = [];
    
        for ($i = 0; $i < strlen($expression); $i++) {
            if ($expression[$i] === '+' || $expression[$i] === '-' || $expression[$i] === '*') {
                $left = $this->diffWaysToCompute(substr($expression, 0, $i));
                $right = $this->diffWaysToCompute(substr($expression, $i + 1));
                
                foreach ($left as $l) {
                    foreach ($right as $r) {
                        switch ($expression[$i]) {
                            case '+':
                                $result[] = $l + $r;
                                break;
                            case '-':
                                $result[] = $l - $r;
                                break;
                            case '*':
                                $result[] = $l * $r;
                                break;
                        }
                    }
                }
            }
        }

        if (empty($result)) {
            $result[] = intval($expression);
        }

        return $result;
    }

}
