/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountSubIslands {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countSubIslands( new int[][]{{1,0,1},{1,1,1}}, new int[][]{{0,1,0},{0,0,0}} ));
    }

    public static int countSubIslands(int[][] grid1, int[][] grid2) {
        int ans = 0;

        for (int i = 0; i < grid2.length; ++i)
        for (int j = 0; j < grid2[0].length; ++j)
            if (grid2[i][j] == 1)
            ans += dfs(grid1, grid2, i, j);

        return ans;
    }

    private static int dfs(int[][] grid1, int[][] grid2, int i, int j) {
        if (i < 0 || i == grid1.length || j < 0 || j == grid2[0].length)
        return 1;
        if (grid2[i][j] != 1)
        return 1;

        grid2[i][j] = 2; // Mark 2 as visited.

        return                                                          //
            dfs(grid1, grid2, i + 1, j) & dfs(grid1, grid2, i - 1, j) & //
            dfs(grid1, grid2, i, j + 1) & dfs(grid1, grid2, i, j - 1) & grid1[i][j];
    }
}
