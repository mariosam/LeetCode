/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} c
 * @return {boolean}
 */
function judgeSquareSum(c) {
    let a = 0;
    let b = Math.floor(Math.sqrt(c));
    while (a <= b) {
        let s = a * a + b * b;
        if (s === c) {
            return true;
        }
        if (s < c) {
            a++;
        } else {
            b--;
        }
    }
    return false;
};
export { judgeSquareSum }
