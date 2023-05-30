/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function minimizeArrayValue(nums) {
    let sum = 0;
    let res = 0;

    for ( let i=0; i < nums.length; i++ ) {
        sum += nums[i];
        res = Math.max(res, (sum+i)/(i+1));
    }
    
    return Math.trunc(res);
}
export { minimizeArrayValue }
