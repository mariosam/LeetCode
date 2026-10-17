/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.List;

public class ApplyOperationsOnArrayToMaximizeSumOfSquares {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxSum( Arrays.asList(1,2,3,0,0,0), 2 ));
    }

    public static int maxSum(List<Integer> nums, int k) {
        int[] dict = new int[32];
        final long MOD = 1_000_000_007L;

        for (int i = 0; i < nums.size(); i++) {
            int num = nums.get(i);
            for (int j = 0; num != 0 && j < 32; j++) {
                dict[j] += num & 1;
                num >>>= 1;
            }
        }

        long ret = 0;
        for (int i = 0; i < k; i++) {
            long num = 0;
            for (int j = 31; j >= 0; j--) {
                if (dict[j] > 0) {
                    num += 1L << j;
                    dict[j]--;
                }
            }
            ret = (ret + num * num) % MOD;
        }
        return (int) ret;
    }

}
