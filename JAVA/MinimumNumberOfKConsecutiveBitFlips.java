/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumNumberOfKConsecutiveBitFlips {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minKBitFlips( new int[]{1,2,2,1}, 1 ));
    }

    public static int minKBitFlips(int[] nums, int k) {
        int n = nums.length;
        int[] d = new int[n + 1];
        int ans = 0;
        int s = 0;

        for (int i = 0; i < n; i++) {
            s += d[i];
            if (s % 2 == nums[i] % 2) {
                if (i + k > n) {
                    return -1;
                }
                d[i]++;
                d[i + k]--;
                s++;
                ans++;
            }
        }
        return ans;
    }
}
