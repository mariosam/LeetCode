/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class FirstCompletelyPaintedRowOrColumn {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", firstCompleteIndex( new int[]{1,2,2,1}, new int[][]{{1,2},{3,4}} ));
    }

    public static int firstCompleteIndex(int[] arr, int[][] mat) {
        int m = mat.length, n = mat[0].length;
        Map<Integer, int[]> idx = new HashMap<>();

        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                idx.put(mat[i][j], new int[]{i, j});
            }
        }

        int[] row = new int[m];
        int[] col = new int[n];

        for (int k = 0; k < arr.length; k++) {
            int[] pos = idx.get(arr[k]);
            int i = pos[0], j = pos[1];
            row[i]++;
            col[j]++;
            if (row[i] == n || col[j] == m) {
                return k;
            }
        }
        
        return -1;
    }
}
