<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ParsingABooleanExpression {    

    /**
     * @param String $expression
     * @return Boolean
     */
    function parseBoolExpr($expression) {
        $st = [];
        $c = [];

        for ($i = 0; $i < strlen($expression); $i++) {
            $ch = $expression[$i];
            if ($ch == '&' || $ch == '|' || $ch == '!') {
                array_push($st, $ch);
            } elseif ($ch == ')') {
                $op = array_pop($st);
                $f = $op == '&';

                while (end($c) != '(') {
                    $val = array_pop($c) == 't';
                    if ($op == '&') {
                        $f = $f && $val;
                    } else {
                        $f = $f || $val;
                    }
                }
                array_pop($c); // Remove the '('

                if ($op == '!') {
                    $f = !$f;
                }

                array_push($c, $f ? 't' : 'f');
            } elseif ($ch != ',') {
                array_push($c, $ch);
            }
        }

        return array_pop($c) == 't';
    }

}
