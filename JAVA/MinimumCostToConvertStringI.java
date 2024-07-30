/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumCostToConvertStringI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumCost( "abcd", "acbe", new char[]{'a','b','c','c','e','d'}, new char[]{'b','c','b','e','b','e'}, new int[]{2,5,5,1,2,20} ));
    }

    public static long minimumCost(String source, String target, char[] original, char[] changed, int[] cost) {
        int inf = Integer.MAX_VALUE / 2;
        int n = 26;
        int[][][] dp = new int[n + 1][n][n];

        for (int i = 0; i <= n; i++) {
            for (int j = 0; j < n; j++) {
                Arrays.fill(dp[i][j], inf);
            }
        }

        int[][] g = new int[n][n];
        for (int i = 0; i < n; i++) {
            Arrays.fill(g[i], inf);
            g[i][i] = 0;
        }

        for (int i = 0; i < original.length; i++) {
            int x = original[i] - 'a';
            int y = changed[i] - 'a';
            g[x][y] = Math.min(g[x][y], cost[i]);
        }

        dp[0] = g;
        for (int k = 0; k < n; k++) {
            for (int i = 0; i < n; i++) {
                for (int j = 0; j < n; j++) {
                    dp[k + 1][i][j] = Math.min(dp[k][i][j], dp[k][i][k] + dp[k][k][j]);
                }
            }
        }

        long ans = 0;
        for (int i = 0; i < source.length(); i++) {
            int a = source.charAt(i) - 'a';
            int b = target.charAt(i) - 'a';
            if (dp[n][a][b] >= inf) {
                return -1;
            }
            ans += dp[n][a][b];
        }
        return ans;
    }
}
