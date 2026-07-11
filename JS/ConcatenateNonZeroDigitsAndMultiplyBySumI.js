/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function sumAndMultiply(n) {
    let p = 1;
    let x = 0;
    let s = 0;

    while (n > 0) {
        const v = n % 10;
        if (v !== 0) {
            s += v;
            x += p * v;
            p *= 10;
        }
        n = Math.floor(n / 10);
    }

    return x * s;
}
export { sumAndMultiply }
