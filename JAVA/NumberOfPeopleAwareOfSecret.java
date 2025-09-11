/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfPeopleAwareOfSecret {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", peopleAwareOfSecret( 2,3,4 ));
    }

    public static int peopleAwareOfSecret(int n, int delay, int forget) {
        int mod = 1_000_000_007;
        long[] dp = new long[n + 1];
        dp[1] = 1;

        for (int i = 1; i <= n; i++) {
            for (int j = i + delay; j < i + forget && j <= n; j++) {
                dp[j] = (dp[j] + dp[i]) % mod;
            }
        }

        long res = 0;
        for (int i = n - forget + 1; i <= n; i++) {
            res = (res + dp[i]) % mod;
        }

        return (int) res;
    }

}
