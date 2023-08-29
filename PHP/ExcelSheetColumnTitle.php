<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ExcelSheetColumnTitle {    

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $str = '';
        while ($columnNumber > 0) {
            $tem = $columnNumber % 26;
            $tem = $tem ? $tem + 64 : 90;
            $str = chr($tem) . $str;
            if ($columnNumber % 26 === 0) {
                $columnNumber--;
            }
            $columnNumber = (int) ($columnNumber / 26);
        }
        return $str;
    }

}
