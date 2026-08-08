/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function findMissingElements(nums) {
    const list = [];
    const ans = [];
    const min = Math.min(...nums);
    const max = Math.max(...nums);

    for (let i = min; i < max; i++) {
        list.push(i);
    }

    for (const e of list) {
        let found = false;
        for (const num of nums) {
            if (e === num) {
                found = true;
                break;
            }
        }

        if (!found) {
            ans.push(e);
        }
    }
    return ans;
}
export { findMissingElements }
