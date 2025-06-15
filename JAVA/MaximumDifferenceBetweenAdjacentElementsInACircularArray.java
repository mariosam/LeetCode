/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximumDifferenceBetweenAdjacentElementsInACircularArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxAdjacentDistance( new int[]{1, 2, 3} ));
    }

    public static int maxAdjacentDistance(int[] nums) {
        int n = nums.length;
        int ans = Math.abs(nums[0] - nums[n - 1]);
        for (int i = 1; i < n; ++i) {
            ans = Math.max(ans, Math.abs(nums[i] - nums[i - 1]));
        }
        return ans;
    }
}
