/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function minimumSteps(s) {
    let steps = 0;
    let blackCount = 0;

    for (let color of s) {
        if (color === '1') {
            blackCount++;
        } else {
            steps += blackCount;
        }
    }

    return steps;
}
export { minimumSteps }
