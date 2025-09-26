/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} triangle
 * @return {number}
 */
function minimumTotal(triangle) {
    if (triangle.length === 0) return 0;
    if (triangle.length === 1) return triangle[0][0];

    let curr = new Array(triangle.length).fill(Infinity);
    curr[0] = triangle[0][0];
    let min = Infinity;

    for (let i = 1; i < triangle.length; i++) {
        let row = triangle[i];
        let prev = curr.slice();
        for (let j = 0; j < row.length; j++) {
            if (j === 0) {
                curr[j] = prev[0] + row[j];
            } else if (j === row.length - 1) {
                curr[j] = prev[row.length - 2] + row[j];
            } else {
                curr[j] = Math.min(prev[j - 1], prev[j]) + row[j];
            }
            if (i === triangle.length - 1) {
                min = Math.min(min, curr[j]);
            }
        }
    }
    return min;
};
export { minimumTotal }
