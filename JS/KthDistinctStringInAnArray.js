/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} arr
 * @param {number} k
 * @return {string}
 */
function kthDistinct(arr, k) {
    const map = new Map();
    for (const s of arr) {
        map.set(s, (map.get(s) || 0) + 1);
    }
    for (const s of arr) {
        if (map.get(s) === 1) {
            if (--k === 0) {
                return s;
            }
        }
    }
    return "";
}
export { kthDistinct }
