/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountWaysToBuildGoodStrings {

    private static final int MODULO = 1_000_000_007;

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countGoodStrings( 1, 2, 3, 4 ));
    }

    public static int countGoodStrings(int low, int high, int zero, int one) {
        int[] dp = new int[high + 1];
        dp[0] = 1;

        for (int end = 1; end <= high; end++) {
            if (end >= zero) {
                dp[end] = (dp[end] + dp[end - zero]) % MODULO;
            }
            if (end >= one) {
                dp[end] = (dp[end] + dp[end - one]) % MODULO;
            }
        }

        int result = 0;
        for (int i = low; i <= high; i++) {
            result = (result + dp[i]) % MODULO;
        }

        return result;
    }
}
