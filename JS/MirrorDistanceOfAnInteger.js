/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function mirrorDistance(n) {
    function reverse(x) {
        let y = 0;
        while (x > 0) {
            y = y * 10 + (x % 10);
            x = Math.floor(x / 10);
        }
        return y;
    }

    return Math.abs(n - reverse(n));
}
export { mirrorDistance }
