class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $sIdx = 0;
        $tIdx = 0;

        while ($sIdx < strlen($s) && $tIdx < strlen($t)) {

            if ($s [$sIdx] === $t [$tIdx]) {
                $sIdx ++;
            }

            $tIdx ++;
        }

        return $sIdx === strlen($s);
    }
}
