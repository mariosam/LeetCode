/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class ConstructProductMatrix {

    public static void main(String[] args) {
        //System.out.printf("Resultado: %d\n", constructProductMatrix(new int[][]{{1, 2}, {3, 4}}));
        int[][] result = constructProductMatrix( new int[][]{{5,7,10},{8,6,8}} );
        System.out.println("Resultado:");
        for (int[] row : result) {
            System.out.println(java.util.Arrays.toString(row));
        }
    }

    public static int[][] constructProductMatrix(int[][] grid) {
        final int MOD = 12345;
        final int m = grid.length;
        final int n = grid[0].length;
        int[][] ans = new int[m][n];
        List<Integer> prefix = new ArrayList<>(List.of(1));
        int suffix = 1;

        for (int[] row : grid)
        for (int num : row)
            prefix.add((int) ((long) prefix.get(prefix.size() - 1) * num % MOD));

        for (int i = m - 1; i >= 0; i--)
        for (int j = n - 1; j >= 0; j--) {
            ans[i][j] = (int) ((long) prefix.get(i * n + j) * suffix % MOD);
            suffix = (int) ((long) suffix * grid[i][j] % MOD);
        }

        return ans;
    }
}
