/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class UniquePathsII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", uniquePathsWithObstacles( new int[][]{{1,2,3,4,5}} ));
    }

    public static int uniquePathsWithObstacles(int[][] obstacleGrid) {
        if (obstacleGrid[0][0] == 1) {
            return 0;
        }

        int rowCount = obstacleGrid.length;
        int colCount = obstacleGrid[0].length;

        for (int i = 0; i < rowCount; i++) {
            for (int j = 0; j < colCount; j++) {
                if (i == 0 && j == 0) {
                    obstacleGrid[i][j] = 1;
                    continue;
                }

                if (obstacleGrid[i][j] == 1) {
                    obstacleGrid[i][j] = 0;
                } else {
                    obstacleGrid[i][j] = 0;
                    if (i >= 1) {
                        obstacleGrid[i][j] += obstacleGrid[i - 1][j];
                    }
                    if (j >= 1) {
                        obstacleGrid[i][j] += obstacleGrid[i][j - 1];
                    }
                }
            }
        }

        return obstacleGrid[rowCount - 1][colCount - 1];
    }

}
