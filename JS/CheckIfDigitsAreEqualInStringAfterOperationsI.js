/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {boolean}
 */
function hasSameDigits(s) {
    let t = s.split('');
    let n = t.length;
    for (let k = n - 1; k > 1; --k) {
        for (let i = 0; i < k; ++i) {
            t[i] = String(((+t[i] + +t[i + 1]) % 10));
        }
    }
    return t[0] === t[1];
}
export { hasSameDigits }
