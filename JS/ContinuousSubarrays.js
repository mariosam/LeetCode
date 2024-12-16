/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function continuousSubarrays(nums) {
    let ans = 0;
    let i = 0, n = nums.length;
    const tm = new Map();

    for (let j = 0; j < n; j++) {
        tm.set(nums[j], (tm.get(nums[j]) || 0) + 1);

        while (Math.max(...tm.keys()) - Math.min(...tm.keys()) > 2) {
            tm.set(nums[i], tm.get(nums[i]) - 1);
            if (tm.get(nums[i]) === 0) {
                tm.delete(nums[i]);
            }
            i++;
        }

        ans += j - i + 1;
    }

    return ans;
}
export { continuousSubarrays }
