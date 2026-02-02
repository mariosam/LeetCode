/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class MinimumCostPathWithTeleportations {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minCost( new int[][]{{1,3,3},{2,5,4},{4,3,5}}, 2));
    }

    public static int minCost(int[][] grid, int k) {
        int m = grid.length, n = grid[0].length;
        int INF = Integer.MAX_VALUE / 4;

        int[][][] f = new int[k + 1][m][n];
        for (int t = 0; t <= k; t++)
            for (int i = 0; i < m; i++)
                Arrays.fill(f[t][i], INF);

        f[0][0][0] = 0;

        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                if (i > 0) f[0][i][j] = Math.min(f[0][i][j], f[0][i-1][j] + grid[i][j]);
                if (j > 0) f[0][i][j] = Math.min(f[0][i][j], f[0][i][j-1] + grid[i][j]);
            }
        }

        Map<Integer, List<int[]>> g = new HashMap<>();
        for (int i = 0; i < m; i++)
            for (int j = 0; j < n; j++)
                g.computeIfAbsent(grid[i][j], x -> new ArrayList<>()).add(new int[]{i, j});

        List<Integer> keys = new ArrayList<>(g.keySet());
        keys.sort(Collections.reverseOrder());

        for (int t = 1; t <= k; t++) {
            int mn = INF;

            for (int key : keys) {
                for (int[] p : g.get(key))
                    mn = Math.min(mn, f[t-1][p[0]][p[1]]);
                for (int[] p : g.get(key))
                    f[t][p[0]][p[1]] = mn;
            }

            for (int i = 0; i < m; i++) {
                for (int j = 0; j < n; j++) {
                    if (i > 0) f[t][i][j] = Math.min(f[t][i][j], f[t][i-1][j] + grid[i][j]);
                    if (j > 0) f[t][i][j] = Math.min(f[t][i][j], f[t][i][j-1] + grid[i][j]);
                }
            }
        }

        int ans = INF;
        for (int t = 0; t <= k; t++)
            ans = Math.min(ans, f[t][m-1][n-1]);

        return ans;
    }
}
