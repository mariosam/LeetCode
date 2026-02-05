/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function maxSumTrionic(nums) {
    const n = nums.length;
    let i = 0;
    let ans = -Infinity;

    while (i < n) {
        const l = i;

        i++;
        while (i < n && nums[i - 1] < nums[i]) i++;
        if (i === l + 1) continue;

        const p = i - 1;
        let s = nums[p - 1] + nums[p];

        while (i < n && nums[i - 1] > nums[i]) {
            s += nums[i];
            i++;
        }
        if (i === p + 1 || i === n || nums[i - 1] === nums[i]) continue;

        const q = i - 1;
        s += nums[i];
        i++;

        let mx = 0, t = 0;
        while (i < n && nums[i - 1] < nums[i]) {
            t += nums[i];
            mx = Math.max(mx, t);
            i++;
        }
        s += mx;

        mx = 0;
        t = 0;
        for (let j = p - 2; j >= l; j--) {
            t += nums[j];
            mx = Math.max(mx, t);
        }
        s += mx;

        ans = Math.max(ans, s);
        i = q;
    }

    return ans;
};
export { maxSumTrionic }
