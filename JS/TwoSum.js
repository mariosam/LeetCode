/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
function twoSum(nums, target) {
    for ( let x=0; x < nums.length; x++ ) {
        for ( let y=x+1; y < nums.length; y++ ) {
            if ( nums[x] + nums[y] == target ) {
                return [x, y];
            }
        }
    }
};
export { twoSum }
