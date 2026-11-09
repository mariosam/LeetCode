/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr1
 * @param {number[]} arr2
 * @param {number} d
 * @return {number}
 */
function findTheDistanceValue(arr1, arr2, d) {
    let res = 0;

    for (let i = 0; i < arr1.length; i++) {
        for (let j = 0; j < arr2.length; j++) {
            const delta = Math.abs(arr1[i] - arr2[j]);

            if (delta <= d) {
                break;
            }

            if (j === arr2.length - 1) {
                res++;
            }
        }
    }
    return res;
}
export { findTheDistanceValue }
