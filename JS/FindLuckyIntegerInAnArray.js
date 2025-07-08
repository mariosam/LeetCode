/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @return {number}
 */
function findLucky(arr) {
    const cnt = new Array(501).fill(0);
    for (const x of arr) {
        cnt[x]++;
    }
    for (let x = 500; x > 0; x--) {
        if (cnt[x] === x) {
            return x;
        }
    }
    return -1;
}
export { findLucky }
