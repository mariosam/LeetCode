/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} start
 * @param {string} target
 * @return {boolean}
 */
function canChange(start, target) {
    const n = start.length;
    let i = 0, j = 0;

    while (true) {
        while (i < n && start[i] === '_') {
            i++;
        }
        while (j < n && target[j] === '_') {
            j++;
        }
        if (i === n && j === n) {
            return true;
        }
        if (i === n || j === n || start[i] !== target[j]) {
            return false;
        }
        if (start[i] === 'L' && i < j) {
            return false;
        }
        if (start[i] === 'R' && i > j) {
            return false;
        }
        i++;
        j++;
    }
}
export { canChange }
