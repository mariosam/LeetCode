/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid1
 * @param {number[][]} grid2
 * @return {number}
 */
function countSubIslands(grid1, grid2) {
    let ans = 0;

    for (let i = 0; i < grid2.length; ++i) {
        for (let j = 0; j < grid2[0].length; ++j) {
            if (grid2[i][j] === 1) {
                ans += dfs(grid1, grid2, i, j);
            }
        }
    }

    return ans;
}

function dfs(grid1, grid2, i, j) {
    if (i < 0 || i >= grid1.length || j < 0 || j >= grid2[0].length) {
        return 1;
    }
    if (grid2[i][j] !== 1) {
        return 1;
    }

    grid2[i][j] = 2; // Marcar como visitado

    return dfs(grid1, grid2, i + 1, j) &
           dfs(grid1, grid2, i - 1, j) &
           dfs(grid1, grid2, i, j + 1) &
           dfs(grid1, grid2, i, j - 1) &
           grid1[i][j];
}
export { countSubIslands }
