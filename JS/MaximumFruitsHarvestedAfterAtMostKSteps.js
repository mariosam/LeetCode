/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} fruits
 * @param {number} startPos
 * @param {number} k
 * @return {number}
 */
function maxTotalFruits(fruits, startPos, k) {
    let max = startPos;
    for (const [pos, val] of fruits) {
        max = Math.max(max, pos);
    }

    const nums = new Array(max + 1).fill(0);
    for (const [pos, val] of fruits) {
        nums[pos] += val;
    }

    const presum = new Array(max + 2).fill(0);
    for (let i = 1; i < presum.length; i++) {
        presum[i] = presum[i - 1] + nums[i - 1];
    }

    let res = 0;
    for (let i = 0; i <= startPos; i++) {
        const leftDis = startPos - i;
        if (leftDis > k) continue;

        const left = k - (2 * leftDis);
        const maxRight = Math.min(max, startPos + left);
        res = Math.max(res, presum[maxRight + 1] - presum[i]);

        const maxRight2 = Math.min(max, startPos + Math.floor((k - leftDis) / 2));
        res = Math.max(res, presum[maxRight2 + 1] - presum[i]);
    }

    return res;
}
export { maxTotalFruits }
