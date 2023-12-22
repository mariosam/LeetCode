/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} matrix
 * @param {number} target
 * @return {boolean}
 */
function searchMatrix(matrix, target) {
    const len1 = matrix.length;
    if (len1 === 0) {
        return false;
    }
    const len2 = matrix[0].length;
    let left = 0;
    let right = len1 * len2 - 1;

    while (left <= right) {
        const mid = Math.floor((left + right) / 2);
        const x = Math.floor(mid / len2);
        const y = mid % len2;

        if (matrix[x][y] === target) {
            return true;
        } else if (matrix[x][y] < target) {
            left = mid + 1;
        } else {
            right = mid - 1;
        }
    }

    return false;
}
export { searchMatrix }
