/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr1
 * @param {number[]} arr2
 * @return {number}
 */
function longestCommonPrefix(arr1, arr2) {
    const set = new Set();

    for (let x of arr1) {
        while (x > 0) {
            set.add(x);
            x = Math.floor(x / 10);
        }
    }

    let ans = 0;

    for (let x of arr2) {
        while (x > 0) {
            if (set.has(x)) {
                ans = Math.max(ans, x.toString().length);
                break;
            }
            x = Math.floor(x / 10);
        }
    }

    return ans;
}
export { longestCommonPrefix }
