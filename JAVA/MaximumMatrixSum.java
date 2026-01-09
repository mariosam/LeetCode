/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximumMatrixSum {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxMatrixSum( new int[][]{{1,2,2,3,3,4}} ));
    }

    public static long maxMatrixSum(int[][] matrix) {
        long sum = 0;
        int cnt = 0;
        int minAbs = Integer.MAX_VALUE;

        for (int[] row : matrix) {
            for (int v : row) {
                int abs = Math.abs(v);
                sum += abs;
                minAbs = Math.min(minAbs, abs);
                if (v < 0) cnt++;
            }
        }

        if (cnt % 2 == 1) {
            sum -= (long) minAbs * 2;
        }

        return sum;
    }
}
