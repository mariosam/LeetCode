/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @return {boolean}
 */
function uniqueOccurrences(arr) {
    let resMap = new Map();
    for (let item of arr) {
        if (resMap.has(item)) {
            resMap.set(item, resMap.get(item) + 1);
            continue;
        }
        resMap.set(item, 1);
    }

    let resNewMap = new Map();
    for (let item of resMap.values()) {
        if (resNewMap.has(item)) {
            return false;
        }
        resNewMap.set(item, 1);
    }

    return true;
}
export { uniqueOccurrences }
