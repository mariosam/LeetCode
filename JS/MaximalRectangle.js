/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {character[][]} matrix
 * @return {number}
 */
function maximalRectangle(matrix) {
    const m = matrix.length;
    if (m === 0) return 0;

    const n = matrix[0].length;
    const left = Array(n).fill(0);
    const right = Array(n).fill(n);
    const height = Array(n).fill(0);

    let maxArea = 0;

    for (let i = 0; i < m; i++) {
        // update height
        for (let j = 0; j < n; j++) {
            height[j] = matrix[i][j] === '1' ? height[j] + 1 : 0;
        }

        // update left
        let curLeft = 0;
        for (let j = 0; j < n; j++) {
            if (matrix[i][j] === '1') {
                left[j] = Math.max(left[j], curLeft);
            } else {
                left[j] = 0;
                curLeft = j + 1;
            }
        }

        // update right
        let curRight = n;
        for (let j = n - 1; j >= 0; j--) {
            if (matrix[i][j] === '1') {
                right[j] = Math.min(right[j], curRight);
            } else {
                right[j] = n;
                curRight = j;
            }
        }

        // compute area
        for (let j = 0; j < n; j++) {
            maxArea = Math.max(maxArea, (right[j] - left[j]) * height[j]);
        }
    }

    return maxArea;
}
export { maximalRectangle }
