/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} num
 * @return {number}
 */
function findComplement(num) {
    let highestOneBit = 1 << (num.toString(2).length - 1);
    num ^= (highestOneBit << 1) - 1;
    return num;
}
export { findComplement }
