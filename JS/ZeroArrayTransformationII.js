/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number[][]} queries
 * @return {number}
 */
function minZeroArray(nums, queries) {
    let line = new Array(nums.length + 1).fill(0);
    let decrement = 0, k = 0;

    for (let i = 0; i < nums.length; i++) {
        while (decrement + line[i] < nums[i]) {
            if (k === queries.length) return -1;

            let [l, r, val] = queries[k++];
            if (r < i) continue;

            line[Math.max(l, i)] += val;
            line[r + 1] -= val;
        }
        decrement += line[i];
    }
    return k;
};
export { minZeroArray }
