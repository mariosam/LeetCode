/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function numSteps(s) {
    let carry = 0;
    let res = 0;
    const n = s.length;

    for (let i = n - 1; i > 0; i--) {
        res += 1;
        if (parseInt(s[i]) + carry === 1) {
            carry = 1;
            res += 1;
        }
    }

    return res + carry;
}
export { numSteps }
