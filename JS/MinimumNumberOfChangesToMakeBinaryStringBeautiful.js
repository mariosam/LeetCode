/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function minChanges(s) {
    let ans = 0;
    for (let i = 1; i < s.length; i += 2) {
        if (s[i] !== s[i - 1]) {
            ans++;
        }
    }
    return ans;
}
export { minChanges }
