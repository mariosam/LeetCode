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
function maxSum(nums, k) {
    const MOD = 1000000007n;
    const dict = new Array(32).fill(0);

    for (let i = 0; i < nums.length; i++) {
        let num = nums[i];
        for (let j = 0; num !== 0 && j < 32; j++) {
            dict[j] += num % 2;
            num = Math.floor(num / 2);
        }
    }

    let ret = 0n;
    for (let i = 0; i < k; i++) {
        let num = 0;
        for (let j = 31; j >= 0; j--) {
            if (dict[j] > 0) {
                num += 2 ** j;
                dict[j]--;
            }
        }
        const value = BigInt(num);
        ret = (ret + value * value) % MOD;
    }
    return Number(ret);
}
export { maxSum }
