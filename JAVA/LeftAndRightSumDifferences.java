/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class LeftAndRightSumDifferences {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", leftRightDifference( new int[]{10,4,-8,7} ));
    }

    public static int[] leftRightDifference(int[] nums) {
        int l = 0;
        int r = 0;

        for (int x : nums) {
            r += x;
        }
        int n = nums.length;
        int[] ans = new int[n];

        for (int i = 0; i < n; i++) {
            int x = nums[i];
            r -= x;
            ans[i] = Math.abs(l - r);
            l += x;
        }
        return ans;
    }

}
