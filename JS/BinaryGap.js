/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function binaryGap(n) {
    let maxlen = 0;
    let len = 0;
    let foundOne = false;

    while (n > 0) {
        let val = n & 1;
        n >>= 1;

        if (val === 1) {
            if (foundOne) {
                maxlen = Math.max(maxlen, len);
            }
            len = 1;
            foundOne = true;
        } else if (foundOne) {
            len++;
        }
    }

    return maxlen;
}
export { binaryGap }
