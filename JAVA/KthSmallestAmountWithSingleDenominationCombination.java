/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class KthSmallestAmountWithSingleDenominationCombination {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findKthSmallest( new int[]{3,2,2,3}, 4 ));
    }

    public static long findKthSmallest(int[] coins, int k) {
        int n = coins.length;
        int M = 1 << n;
        long[] lcm = new long[M];
        lcm[0] = 1;

        for (int i = 0; i < n; i++) {
            int v = coins[i];
            for (int j = 0; j < (1 << i); j++) {
                lcm[j | (1 << i)] =
                    v / gcd(lcm[j], v) * lcm[j];
            }
        }
        long l = 1;
        long r = (long) coins[0] * k;

        while (l <= r) {
            long md = (l + r) >> 1;
            long cnt = 0;

            for (int i = 1; i < M; i++) {
                if (Integer.bitCount(i) % 2 == 0) {
                    cnt -= md / lcm[i];
                } else {
                    cnt += md / lcm[i];
                }
            }
            if (cnt >= k) {
                r = md - 1;
            } else {
                l = md + 1;
            }
        }
        return l;
    }

    private static long gcd(long a, long b) {
        while (a > 0) {
            long tmp = a;
            a = b % a;
            b = tmp;
        }
        return b;
    }

}
