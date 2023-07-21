/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} gain
 * @return {number}
 */
function largestAltitude(gain) {
    let res = 0;
    let cur = 0;

    for (let i = 0; i < gain.length; i++) {
        const g = gain[i];
        cur += g;
        if (cur > res) {
            res = cur;
        }
    }

    return res;
}
export { largestAltitude }
