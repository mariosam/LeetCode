/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountServersThatCommunicate {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countServers( new int[][]{{1, 3, 5, 2, 7, 5},{1, 2, 3}} ));
    }

    public static int countServers(int[][] grid) {
        int m = grid.length, n = grid[0].length, res = 0;
        int[] row = new int[m], col = new int[n];

        // Count servers in each row and column
        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                if (grid[i][j] == 1) {
                    row[i]++;
                    col[j]++;
                }
            }
        }

        // Count servers that can communicate
        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                if (grid[i][j] == 1 && (row[i] + col[j] > 2)) {
                    res++;
                }
            }
        }

        return res;
    }

}
