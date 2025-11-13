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
function countOperations(num1, num2) {
    if (num1 === 0 || num2 === 0) return 0;
    if (num1 === num2) return 1;

    let count = 0;
    while (num1 !== 0 && num2 !== 0) {
        count++;
        if (num1 === num2) break;
        else if (num1 > num2) num1 -= num2;
        else num2 -= num1;
    }

    return count;
}
export { countOperations }
