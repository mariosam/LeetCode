/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minDifference( new int[]{1,1,2} ));
    }

    public static int minDifference(int[] nums) {
        int n = nums.length;
        if (n < 5) {
            return 0;
        }
        Arrays.sort(nums);
        int ans = Integer.MAX_VALUE;
        for (int l = 0; l <= 3; l++) {
            int r = 3 - l;
            ans = Math.min(ans, nums[n - 1 - r] - nums[l]);
        }
        return ans;
    }

}
