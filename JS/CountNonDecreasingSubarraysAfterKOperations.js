/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} k
 * @return {number}
 */
function countNonDecreasingSubarrays(nums, k) {
    let ans = 0;
    let cost = 0;
    const dq = [];

    for (let i = nums.length - 1, j = nums.length - 1; i >= 0; --i) {
        const num = nums[i];
        let count = 1;

        while (dq.length > 0 && dq[dq.length - 1][0] < num) {
            const [nextNum, nextCount] = dq.pop();
            count += nextCount;
            cost += (num - nextNum) * nextCount;
        }
        dq.push([num, count]);

        while (cost > k) {
            const [rightmostNum, rightmostCount] = dq.shift();
            cost -= rightmostNum - nums[j--];
            if (rightmostCount > 1) {
                dq.unshift([rightmostNum, rightmostCount - 1]);
            }
        }
        ans += j - i + 1;
    }
    return ans;
}
export { countNonDecreasingSubarrays }
