class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $left = 1;
        $right = count($nums) - 1;

        while ($left < $right) {
            $mid = $left + (($right - $left) >> 1);

            $count = 0;
            foreach ($nums as $num) {
                if ($num <= $mid) {
                    $count++;
                }
            }

            if ($count > $mid) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }

        return $left;
    }
}
