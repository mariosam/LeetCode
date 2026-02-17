/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function reverseBits(n) {
    let res = 0;
    for (let i = 0; i < 32; i++) {
        res = (n & 1) | (res << 1);
        n >>>= 1;
    }
    return res >>> 0;
}
export { reverseBits }
