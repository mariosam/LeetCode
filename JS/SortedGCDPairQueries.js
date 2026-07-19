/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number[]} queries
 * @return {number[]}
 */
function gcdValues(nums, queries) {
    const mx = Math.max(...nums);
    const cntX = new Int32Array(mx + 1);
    const cntGcd = new Float64Array(mx + 1);

    for (const x of nums) {
        cntX[x]++;
    }

    for (let i = mx; i > 0; i--) {
        let cnt = 0;
        for (let j = i; j <= mx; j += i) {
            cnt += cntX[j];
            cntGcd[i] -= cntGcd[j];
        }
        cntGcd[i] += cnt * (cnt - 1) / 2;
    }

    for (let i = 1; i <= mx; i++) {
        cntGcd[i] += cntGcd[i - 1];
    }
    const ans = [];

    for (const query of queries) {
        const target = query + 1;
        let left = 0;
        let right = cntGcd.length;

        while (left < right) {
            const mid = Math.floor((left + right) / 2);
            if (cntGcd[mid] < target) {
                left = mid + 1;
            } else {
                right = mid;
            }
        }
        ans.push(left);
    }
    return ans;
};
export { gcdValues }
