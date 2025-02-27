/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfSubarraysWithOddSum {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numOfSubarrays( new int[]{1,2,3} ));
    }

    public static int numOfSubarrays(int[] arr) {
        int cnt_even = 1, cnt_odd = 0, prefix = 0, res = 0;
        final int MOD = 1000000007;
        for (int a : arr) {
            prefix += a;
            if (prefix % 2 == 0) {
                res += cnt_odd;
                cnt_even += 1;
            } else {
                res += cnt_even;
                cnt_odd += 1;
            }
            res %= MOD;
        }
        return res;
    }

}
