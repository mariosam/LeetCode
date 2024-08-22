/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} arrays
 * @return {number}
 */
function maxDistance(arrays) {
    let curMin = Math.min(...arrays[0]);
    let curMax = Math.max(...arrays[0]);

    let result = 0;
    for (let i = 1; i < arrays.length; i++) {
        const newMin = Math.min(...arrays[i]);
        const newMax = Math.max(...arrays[i]);

        result = Math.max(result, Math.abs(newMax - curMin));
        result = Math.max(result, Math.abs(curMax - newMin));

        curMin = Math.min(curMin, newMin);
        curMax = Math.max(curMax, newMax);
    }
    return result;
}
export { maxDistance }
