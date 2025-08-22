/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountSquareSubmatricesWithAllOnes {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countSquares( new int[][]{{0,1,1,1},{1,1,1,1},{0,1,1,1}} ));
    }

    public static int countSquares(int[][] matrix) {
        int m = matrix.length, n = matrix[0].length, ans = 0;
        int[][] f = new int[m][n];

        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                if (matrix[i][j] == 0) continue;

                if (i == 0 || j == 0) {
                    f[i][j] = 1;
                } else {
                    f[i][j] = Math.min(f[i-1][j-1], Math.min(f[i-1][j], f[i][j-1])) + 1;
                }

                ans += f[i][j];
            }
        }
        return ans;
    }

}
