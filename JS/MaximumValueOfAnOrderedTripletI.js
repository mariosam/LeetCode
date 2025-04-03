/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function maximumTripletValue(nums) {
    const n = nums.length
    let res = 0
    for(let i = 0; i < n - 2; i++) {
        for(let j = i + 1; j < n - 1; j++) {
            for(let k = j + 1; k < n ; k++) {
                if(nums[i] < 0 && nums[j] < 0 && nums[k] < 0) continue
                res = Math.max(res, (nums[i] - nums[j]) * nums[k])
            }
        }
    }
    return res
};
export { maximumTripletValue }
