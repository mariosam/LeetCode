/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @return {number}
 */
function numMagicSquaresInside(grid) {
    if (grid === null || grid.length < 3 || grid[0].length < 3) {
        return 0;
    }
    let R = grid.length, C = grid[0].length;
    let count = 0;
    for (let r = 0; r <= R - 3; ++r) {
        for (let c = 0; c <= C - 3; ++c) {
            if (grid[r + 1][c + 1] === 5 && isMagic(grid, r, c)) {
                count++;
            }
        }
    }
    return count;
}
function isMagic(grid, r, c) {
    let counts = new Array(9).fill(0);
    for (let i = 0; i < 3; ++i) {
        let rSum = 0, cSum = 0;
        for (let j = 0; j < 3; ++j) {
            rSum += grid[r + i][c + j];
            cSum += grid[r + j][c + i];
            let t = grid[r + i][c + j];
            if (t > 9 || t < 1 || counts[t - 1]++ > 0) {
                return false;
            }
        }
        if (rSum !== 15 || cSum !== 15) {
            return false;
        }
    }
    return true;
}
export { numMagicSquaresInside }
