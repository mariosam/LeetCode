/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class NumberOfSubsequencesThatSatisfyTheGivenSumCondition {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numSubseq( new int[]{1,2,3}, 2 ));
    }

    public static int numSubseq(int[] nums, int target) {
        Arrays.sort(nums);
        int mod = 1_000_000_007;
        int n = nums.length;

        int[] pows = new int[n + 1];
        pows[0] = 1;
        for (int i = 1; i <= n; i++) {
            pows[i] = (int)((pows[i - 1] * 2L) % mod);
        }

        int answer = 0;
        int right = n - 1;

        for (int left = 0; left < n; left++) {
            while (right >= left && nums[left] + nums[right] > target) {
                right--;
            }
            if (left <= right) {
                answer = (answer + pows[right - left]) % mod;
            }
        }

        return answer;
    }

}
