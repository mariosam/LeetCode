/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @return {number[][]}
 */
function sortMatrix(grid) {
    const n = grid.length;

    // Bottom-left diagonals
    for (let k = n - 2; k >= 0; --k) {
        let i = k, j = 0;
        let t = [];
        while (i < n && j < n) {
            t.push(grid[i][j]);
            i++; j++;
        }
        t.sort((a, b) => a - b);
        for (let x of t) {
            i--; j--;
            grid[i][j] = x;
        }
    }

    // Top-right diagonals
    for (let k = n - 2; k > 0; --k) {
        let i = k, j = n - 1;
        let t = [];
        while (i >= 0 && j >= 0) {
            t.push(grid[i][j]);
            i--; j--;
        }
        t.sort((a, b) => a - b);
        for (let x of t) {
            i++; j++;
            grid[i][j] = x;
        }
    }

    return grid;
};
export { sortMatrix }
