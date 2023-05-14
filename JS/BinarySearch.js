/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number}
 */
function search(nums, target) {
    if ( nums[0] == target ) return 0;
    
    if ( nums.indexOf(target) ) return nums.indexOf(target);
    
    return -1;
}
export { search }
