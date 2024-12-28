/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} values
 * @return {number}
 */
function maxScoreSightseeingPair(values) {
    let ans = 0;
    let mx = values[0];
    for (let i = 1; i < values.length; i++) {
        ans = Math.max(ans, values[i] - i + mx);
        mx = Math.max(mx, values[i] + i);
    }
    return ans;
}
export { maxScoreSightseeingPair }
