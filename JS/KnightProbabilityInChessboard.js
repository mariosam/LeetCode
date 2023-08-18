/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} k
 * @param {number} row
 * @param {number} column
 * @return {number}
 */
const dirs = [[-1, 2], [-1, -2], [1, -2], [1, 2], [-2, 1], [-2, -1], [2, 1], [2, -1]];

function knightProbability(n, k, row, column) {
    const dp = new Array(n).fill().map(() => new Array(n).fill().map(() => new Array(k + 1).fill(0)));

    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n; j++) {
        dp[i][j][0] = 1;
        }
    }

    for (let p = 1; p <= k; p++) {
        for (let i = 0; i < n; i++) {
        for (let j = 0; j < n; j++) {
            for (const dir of dirs) {
            const nx = i + dir[0];
            const ny = j + dir[1];

            if (nx < 0 || nx >= n || ny < 0 || ny >= n) {
                continue;
            }

            dp[i][j][p] += dp[nx][ny][p - 1] / 8;
            }
        }
        }
    }

    return dp[row][column][k];
}
export { knightProbability }
