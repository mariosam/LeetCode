/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @return {number}
 */
function countServers(grid) {
    let m = grid.length, n = grid[0].length;
    let row = new Array(m).fill(0);
    let col = new Array(n).fill(0);
    let res = 0;

    // Count servers in each row and column
    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            if (grid[i][j] === 1) {
                row[i]++;
                col[j]++;
            }
        }
    }

    // Count servers that can communicate
    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            if (grid[i][j] === 1 && (row[i] + col[j] > 2)) {
                res++;
            }
        }
    }

    return res;
}
export { countServers }
