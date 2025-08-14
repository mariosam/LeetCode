/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class WaysToExpressAnIntegerAsSumOfPowers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numberOfWays( 2, 4 ));
    }

    public static int numberOfWays(int n, int x) {
        int mod = 1_000_000_007;
        int[][] f = new int[n + 1][n + 1];
        f[0][0] = 1;

        for (int i = 1; i <= n; i++) {
            int k = (int) Math.pow(i, x);
            for (int j = 0; j <= n; j++) {
                f[i][j] = f[i - 1][j];
                if (k <= j) {
                    f[i][j] = (f[i][j] + f[i - 1][j - k]) % mod;
                }
            }
        }

        return f[n][n];
    }

}
