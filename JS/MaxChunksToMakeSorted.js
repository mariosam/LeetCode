/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @return {number}
 */
function maxChunksToSorted(arr) {
    let ans = 0;
    let mx = 0;

    for (let i = 0; i < arr.length; i++) {
        mx = Math.max(mx, arr[i]);
        if (i === mx) {
            ans++;
        }
    }

    return ans;
}
export { maxChunksToSorted }
