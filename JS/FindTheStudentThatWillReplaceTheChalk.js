/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} chalk
 * @param {number} k
 * @return {number}
 */
function chalkReplacer(chalk, k) {
    const sum = chalk.reduce((acc, x) => acc + x, 0); // Calculate the sum of the chalk array
    k %= sum; // Reduce k by modulo the sum

    for (let i = 0; i < chalk.length; i++) {
        if (k < chalk[i]) {
            return i; // Return the current index if k is less than chalk amount
        }
        k -= chalk[i]; // Reduce k by the current chalk amount
    }
    return -1;
}
export { chalkReplacer }
