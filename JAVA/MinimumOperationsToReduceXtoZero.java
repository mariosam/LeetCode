/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumOperationsToReduceXtoZero {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minOperations( new int[]{1,2,2,1}, 2 ));
    }

    public static int minOperations(int[] nums, int x) {
        x = -x;
        for (int v : nums) {
            x += v;
        }
        int ans = 1 << 30;
        int s = 0;
        int n = nums.length;
        int j = 0;

        for (int i = 0; i < n; i++) {
            s += nums[i];

            while (j <= i && s > x) {
                s -= nums[j];
                j++;
            }

            if (s == x) {
                ans = Math.min(ans, n - (i - j + 1));
            }
        }

        if (ans == 1 << 30) {
            return -1;
        }

        return ans;
    }
}
