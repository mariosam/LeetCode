/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {string}
 */
function maximumOddBinaryNumber(s) {
    const cnt = (s.match(/1/g) || []).length;
    return "1".repeat(Math.max(0, cnt - 1)) + "0".repeat(Math.max(0, s.length - cnt)) + "1";
};
export { maximumOddBinaryNumber }
