/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximumDifferenceBetweenIncreasingElements {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximumDifference( new int[]{1, 2, 3} ));
    }

    public static int maximumDifference(int[] nums) {
        int ans = -1;
        int mn = nums[0];

        for (int i = 1; i < nums.length; ++i) {
        if (nums[i] > mn)
            ans = Math.max(ans, nums[i] - mn);
        mn = Math.min(mn, nums[i]);
        }

        return ans;
    }
}
