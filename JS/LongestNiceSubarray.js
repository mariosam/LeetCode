/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function longestNiceSubarray(nums) {
    const n = nums.length
    let i = 0, mask = 0, res = 0
    for(let j = 0; j < n; j++) {
        const e = nums[j]
        while((mask & e) !== 0) {
        mask ^= nums[i]
        i++
        }
        mask |= e
        res = Math.max(res, j - i + 1)
    }
    return res
}
export { longestNiceSubarray }
