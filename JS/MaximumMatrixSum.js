/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} matrix
 * @return {number}
 */
function maxMatrixSum(matrix) {
    let sum = 0;
    let cnt = 0;
    let minAbs = Number.MAX_SAFE_INTEGER;

    for (const row of matrix) {
        for (const v of row) {
            const abs = Math.abs(v);
            sum += abs;
            minAbs = Math.min(minAbs, abs);
            if (v < 0) cnt++;
        }
    }

    if (cnt % 2 === 1) {
        sum -= minAbs * 2;
    }

    return sum;
};
export { maxMatrixSum }
