/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} obstacleGrid
 * @return {number}
 */
function uniquePathsWithObstacles(obstacleGrid) {
    if (obstacleGrid[0][0] === 1) {
        return 0;
    }

    const rowCount = obstacleGrid.length;
    const colCount = obstacleGrid[0].length;

    for (let i = 0; i < rowCount; i++) {
        for (let j = 0; j < colCount; j++) {
            if (i === 0 && j === 0) {
                obstacleGrid[i][j] = 1;
                continue;
            }

            if (obstacleGrid[i][j] === 1) {
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
export { uniquePathsWithObstacles }
