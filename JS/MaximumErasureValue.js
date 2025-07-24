/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function maximumUniqueSubarray(nums) {
    let l = 0, r = 0;
    let cnt = new Map();
    let sum = 0;
    let ans = 0;

    while (r < nums.length) {
        let num = nums[r];
        sum += num;
        r++;
        cnt.set(num, (cnt.get(num) || 0) + 1);

        while (cnt.get(num) > 1) {
            let out = nums[l];
            l++;
            sum -= out;
            cnt.set(out, cnt.get(out) - 1);
        }

        ans = Math.max(ans, sum);
    }

    return ans;
}
export { maximumUniqueSubarray }
