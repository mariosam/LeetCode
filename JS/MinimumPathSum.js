/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @return {number}
 */
function minPathSum(grid) {
    let m = grid.length;
    let n = grid[0].length;

    for (let i = 1; i < m; i ++) grid[i][0] += grid[i-1][0];
    for (let j = 1; j < n; j ++) grid[0][j] += grid[0][j-1];
    for (let i = 1; i < m; i ++) {
        for (let j = 1; j < n; j ++) grid[i][j] += Math.min(grid[i-1][j],grid[i][j-1]);
    }

    return grid[m-1][n-1];
}
export { minPathSum }
