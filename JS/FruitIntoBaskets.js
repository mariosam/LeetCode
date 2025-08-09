/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} fruits
 * @return {number}
 */
function totalFruit(fruits) {
    const n = fruits.length;
    if (n === 0) return 0;

    let present = fruits[0];
    let presentIndex = 0;
    let index = 1;
    let start = 0;
    let maxLen = 0;

    while (index < n && fruits[index] === present) {
        index++;
    }
    if (index === n) return index - start;

    let previous = present;
    let previousIndex = index - 1;
    present = fruits[index];
    presentIndex = index;

    while (index < n) {
        if (fruits[index] === previous) {
            previous = present;
            present = fruits[index];
            presentIndex = index;
        } else if (fruits[index] !== present) {
            maxLen = Math.max(maxLen, index - start);
            start = presentIndex;
            previous = present;
            present = fruits[index];
            presentIndex = index;
        }
        index++;
    }
    return Math.max(maxLen, index - start);
}
export { totalFruit }
