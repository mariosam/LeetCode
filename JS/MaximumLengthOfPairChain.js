/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} pairs
 * @return {number}
 */
function findLongestChain(pairs) {
    pairs.sort((a, b) => a[1] - b[1]);
    let ans = 0;
    let cur = Number.MIN_SAFE_INTEGER;

    for (const p of pairs) {
        if (cur < p[0]) {
            cur = p[1];
            ans++;
        }
    }

    return ans;
};
export { findLongestChain }
