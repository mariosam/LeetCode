/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function smallestUniqueSubarray(nums) {
    const n = nums.length;
    const check = function(l) {
        const counts = new Map();
        let unique = 0;

        const add = function(h) {
            const count = (counts.get(h) || 0) + 1;
            counts.set(h, count);
            if (count === 1) {
                unique++;
            } else if (count === 2) {
                unique--;
            }
        };
        const base = 131;
        const mod = 2147483647;
        let h = 0;
        let pow = 1;

        for (let i = 0; i < l; i++) {
            pow = (pow * base) % mod;
            h = (h * base + nums[i]) % mod;
        }
        add(h);

        for (let i = l; i < n; i++) {
            h = (h * base - (nums[i - l] * pow) % mod + mod + nums[i]) % mod;
            add(h);
        }
        return unique > 0;
    };
    let low = 1;
    let high = n;

    while (low < high) {
        const mid = Math.floor((low + high) / 2);
        if (check(mid)) {
            high = mid;
        } else {
            low = mid + 1;
        }
    }
    return low;
}
export { smallestUniqueSubarray }
