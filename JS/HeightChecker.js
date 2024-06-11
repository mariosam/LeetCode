/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} heights
 * @return {number}
 */
function heightChecker(heights) {
    let expected = [...heights];
    expected.sort((a, b) => a - b);
    let ans = 0;
    for (let i = 0; i < heights.length; i++) {
        if (heights[i] !== expected[i]) {
            ans++;
        }
    }
    return ans;
}
export { heightChecker }
