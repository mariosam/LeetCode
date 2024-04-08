/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {boolean}
 */
function checkValidString(s) {
    let lo = 0, hi = 0;
    for (let c of s) {
        if (c === '(') {
            lo++;
            hi++;
        } else if (c === ')') {
            lo--;
            hi--;
        } else {
            lo--;
            hi++;
        }
        if (hi < 0) break;
        lo = Math.max(lo, 0);
    }
    return lo === 0;
}
export { checkValidString }
