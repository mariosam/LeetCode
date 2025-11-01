/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} target
 * @return {number}
 */
function minNumberOperations(target) {
    if (target.length === 0) return 0;
    let ans = target[0];
    for (let i = 1; i < target.length; i++) {
        if (target[i] > target[i - 1]) {
            ans += target[i] - target[i - 1];
        }
    }
    return ans;
}
export { minNumberOperations }
