/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfZigZagArraysI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", zigZagArrays(5, 0, 4));
    }

    public static int zigZagArrays(int n, int l, int r) {
        r -= l;
        long[] dp = new long[r + 1];
        java.util.Arrays.fill(dp, 1);
        final long mod = 1_000_000_007L;

        for (int i = 1; i < n; i++) {
            long pre = 0;

            if ((i & 1) == 1) {
                for (int v = 0; v <= r; v++) {
                    long pre2 = pre + dp[v];
                    dp[v] = pre;
                    pre = pre2 % mod;
                }
            } else {
                for (int v = r; v >= 0; v--) {
                    long pre2 = pre + dp[v];
                    dp[v] = pre;
                    pre = pre2 % mod;
                }
            }
        }

        long sum = 0;
        for (long x : dp) {
            sum += x;
        }
        return (int) ((sum * 2) % mod);
    }

}
