/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} m
 * @return {number}
 */
function differenceOfSums(n, m) {
    let num1 = 0, num2 = 0;
    for (let i = 1; i <= n; i++) {
        if (i % m === 0) {
            num2 += i;
        } else {
            num1 += i;
        }
    }
    return num1 - num2;
}
export { differenceOfSums }
