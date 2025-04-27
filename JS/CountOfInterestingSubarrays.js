/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} modulo
 * @param {number} k
 * @return {number}
 */
function countInterestingSubarrays(nums, modulo, k) {
    let ans = 0;
    let prefix = 0;
    const prefixCount = new Map();
    prefixCount.set(0, 1);

    for (const num of nums) {
        if (num % modulo === k) {
            prefix = (prefix + 1) % modulo;
        }
        const key = (prefix - k + modulo) % modulo;
        ans += prefixCount.get(key) || 0;
        prefixCount.set(prefix, (prefixCount.get(prefix) || 0) + 1);
    }

    return ans;
}
export { countInterestingSubarrays }
