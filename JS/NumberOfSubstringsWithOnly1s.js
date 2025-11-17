/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function numSub(s) {
    let count = 0;
    let sum = 0;
    const mod = 1e9 + 7;

    for (let i = 0; i < s.length; i++) {
        if (s[i] === '1') {
            sum++;
            count = (count + sum) % mod;
        } else {
            sum = 0;
        }
    }

    return count;
}
export { numSub }
