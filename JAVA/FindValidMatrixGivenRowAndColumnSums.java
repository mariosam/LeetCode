/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindValidMatrixGivenRowAndColumnSums {

    public static void main(String[] args) {
        int[][] result = restoreMatrix( new int[]{5,7,10}, new int[]{8,6,8} );
        System.out.println("Resultado:");
        for (int[] row : result) {
            System.out.println(java.util.Arrays.toString(row));
        }
    }

    public static int[][] restoreMatrix(int[] rowSum, int[] colSum) {
        int m = rowSum.length;
        int n = colSum.length;
        int[][] res = new int[m][n];
        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                res[i][j] = Math.min(rowSum[i], colSum[j]);
                rowSum[i] -= res[i][j];
                colSum[j] -= res[i][j];
            }
        }
        return res;
    }

}
