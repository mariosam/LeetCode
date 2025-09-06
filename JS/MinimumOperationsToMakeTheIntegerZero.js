/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} num1
 * @param {number} num2
 * @return {number}
 */
function makeTheIntegerZero(num1, num2) {
    for (let ops = 0; ops <= 60; ops++) {
        let target = num1 - ops * num2;
        if (target < 0) continue;

        // Count set bits in target
        let bitCount = target.toString(2).replace(/0/g, "").length;

        if (bitCount <= ops && ops <= target) {
            return ops;
        }
    }
    return -1;
}
export { makeTheIntegerZero }
