/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MaximumNumberOfDistinctElementsAfterOperations {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxDistinctElements( new int[]{1,2,2,3,3,4}, 2 ));
    }

    public static int maxDistinctElements(int[] nums, int k) {
        Arrays.sort(nums);
        int ans = 0, pre = Integer.MIN_VALUE;
        for (int x : nums) {
            int cur = Math.min(x + k, Math.max(x - k, pre + 1));
            if (cur > pre) {
                ++ans;
                pre = cur;
            }
        }
        return ans;
    }
}
