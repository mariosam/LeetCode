/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function zeroFilledSubarray(nums, val) {
    let zeros = 0, ans = 0;
    
    for (let num of nums) {
        zeros = num === 0 ? zeros + 1 : 0;
        ans += zeros;
    }
    
    return ans;
}
export { zeroFilledSubarray }
