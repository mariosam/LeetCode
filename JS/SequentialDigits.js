/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} low
 * @param {number} high
 * @return {number[]}
 */
function sequentialDigits(low, high) {
    const results = [];
    for (let i = 1; i <= 9; i++) {
        let num = i;
        for (let j = i + 1; j <= 9; j++) {
            num = num * 10 + j;
            if (num >= low && num <= high) {
                results.push(num);
            }
        }
    }
    results.sort((a, b) => a - b);
    return results;
};
export { sequentialDigits }
