/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class KRadiusSubarrayAverages {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", getAverages(new int[]{2,7,11,15}, 9));
    }

    public static int[] getAverages(int[] nums, int k) {
        int n = nums.length;
        long[] s = new long[n + 1];
        for (int i = 0; i < n; ++i) {
            s[i + 1] = s[i] + nums[i];
        }

        int[] ans = new int[n];
        Arrays.fill(ans, -1);
        for (int i = 0; i < n; ++i) {
            if (i - k >= 0 && i + k < n) {
                ans[i] = (int) ((s[i + k + 1] - s[i - k]) / (k << 1 | 1));
            }
        }
        
        return ans;
    }

}
