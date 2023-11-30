/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumNumberOfOperationsToMakeArrayContinuous {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minOperations( new int[]{1,2,2,1} ));
    }

    public static int minOperations(int[] nums) {
        Arrays.sort(nums);
        int n = nums.length;
        int m = 1;
        for (int i = 1; i < n; i++) {
            if (nums[i] != nums[i - 1]) {
                nums[m] = nums[i];
                m++;
            }
        }
        int ans = n;
        for (int i = 0, j = 0; i < m; i++) {
            while (j < m && nums[j] - nums[i] <= n - 1) {
                j++;
            }
            ans = Math.min(ans, n - (j - i));
        }
        return ans;
    }
}
