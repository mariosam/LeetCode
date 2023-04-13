/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumPathSum {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minPathSum( new int[][]{{1,2,2,1}} ));
    }

    public static int minPathSum(int[][] grid) {
        int m = grid.length;
        int n = grid[0].length;

        for (int i = 1; i < m; i ++) grid[i][0] += grid[i-1][0];
        for (int j = 1; j < n; j ++) grid[0][j] += grid[0][j-1];
        for (int i = 1; i < m; i ++) {
            for (int j = 1; j < n; j ++) grid[i][j] += Math.min(grid[i-1][j],grid[i][j-1]);
        }

        return grid[m-1][n-1];
    }
}
