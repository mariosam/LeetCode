/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {boolean}
 */
function divideArray(nums) {
    let cnt = new Array(510).fill(0);

    for (let x of nums) {
        cnt[x]++;
    }

    for (let v of cnt) {
        if (v % 2 !== 0) {
            return false;
        }
    }
    return true;
}
export { divideArray }
