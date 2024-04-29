/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumFallingPathSumII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minFallingPathSum( new int[][]{{123}} ));
    }

    public static int minFallingPathSum(int[][] grid) {
        int n = grid.length;
        int[][] f = new int[n + 1][n];
        final int inf = 1 << 30;

        for (int i = 0; i < n; i++) {
            for (int j = 0; j < n; j++) {
                f[i + 1][j] = grid[i][j];
            }
        }

        for (int i = 1; i <= n; i++) {
            for (int j = 0; j < n; j++) {
                int x = inf;
                for (int k = 0; k < n; k++) {
                    if (k != j) {
                        x = Math.min(x, f[i - 1][k]);
                    }
                }
                if (x == inf) {
                    x = 0;
                }
                f[i][j] += x;
            }
        }

        int minSum = Integer.MAX_VALUE;
        for (int sum : f[n]) {
            minSum = Math.min(minSum, sum);
        }
        return minSum;
    }
}
