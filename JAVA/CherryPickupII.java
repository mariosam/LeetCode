/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class CherryPickupII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", cherryPickup( new int[][] {{5}} ));
    }

    public static int cherryPickup(int[][] grid) {
        int m = grid.length;
        int n = grid[0].length;
        int[][][] f = new int[m][n][n];
        
        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                Arrays.fill(f[i][j], -1);
            }
        }
        
        f[0][0][n-1] = grid[0][0] + grid[0][n-1];
        
        for (int i = 1; i < m; i++) {
            for (int j1 = 0; j1 < n; j1++) {
                for (int j2 = 0; j2 < n; j2++) {
                    int x = grid[i][j1];
                    
                    if (j1 != j2) {
                        x += grid[i][j2];
                    }
                    
                    for (int y1 = j1 - 1; y1 <= j1 + 1; y1++) {
                        for (int y2 = j2 - 1; y2 <= j2 + 1; y2++) {
                            if (y1 >= 0 && y1 < n && y2 >= 0 && y2 < n && f[i-1][y1][y2] != -1) {
                                f[i][j1][j2] = Math.max(f[i][j1][j2], f[i-1][y1][y2] + x);
                            }
                        }
                    }
                }
            }
        }
        
        int ans = 0;
        
        for (int j1 = 0; j1 < n; j1++) {
            for (int j2 = 0; j2 < n; j2++) {
                ans = Math.max(ans, f[m-1][j1][j2]);
            }
        }
        
        return ans;
    }

}
