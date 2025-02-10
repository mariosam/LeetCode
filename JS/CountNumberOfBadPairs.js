/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function countBadPairs(nums) {
    let n = nums.length;
    let ans = 0;
    let counter = new Map();

    for (let i = n - 1; i >= 0; i--) {
        let diff = nums[i] - i;
        if (counter.has(diff)) {
            ans += counter.get(diff);
        }
        counter.set(diff, (counter.get(diff) || 0) + 1);
    }

    return (n * (n - 1)) / 2 - ans;
}
export { countBadPairs }
