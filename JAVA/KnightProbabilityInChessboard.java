/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class KnightProbabilityInChessboard {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", knightProbability(3, 2, 0, 0));
    }

    static int[][] dirs = new int[][] {{-1, 2}, {-1, -2}, {1, -2}, {1, 2}, {-2, 1}, {-2, -1}, {2, 1}, {2, -1}};

    public static double knightProbability(int n, int k, int row, int column) {
        double[][][] dp = new double[n][n][k + 1];

        for(int i = 0; i < n; i++) {
            for(int j = 0; j < n; j++)
                dp[i][j][0] = 1;
        }

        for(int p = 1; p <= k; p++) {
            for(int i = 0; i < n; i++) {
                for(int j = 0; j < n; j++) {
                    for(int[] dir: dirs) {
                        int nx = i + dir[0];
                        int ny = j + dir[1];

                        if(nx < 0 || nx >= n || ny < 0 || ny >= n)
                            continue;

                        dp[i][j][p] += dp[nx][ny][p - 1] / 8;
                    }
                }
            }
        }

        return dp[row][column][k];
    }

}
