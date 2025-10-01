/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumScoreTriangulationOfPolygon {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minScoreTriangulation( new int[]{3,22,3} ));
    }

    public static int  minScoreTriangulation(int[] values) {
        int n = values.length;
        int[][] dp = new int[n][n];
        for(int i = n - 3; i >= 0; i--){
            for(int j = i + 2; j < n; j++){
                dp[i][j] = Integer.MAX_VALUE;
                for(int k = i + 1; k < j; k++){
                    dp[i][j] = Math.min(dp[i][j], dp[i][k] + dp[k][j] + values[i] * values[j] * values[k]);
                }
            }
        }
        return dp[0][n - 1];
    }

}
