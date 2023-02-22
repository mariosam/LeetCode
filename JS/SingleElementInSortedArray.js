/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function singleNonDuplicate(nums) {
    if ( nums.length == 1 ) return nums[0];
    nums.sort;
    if ( nums[0] != nums[1] ) return nums[0];

    for ( let i=1; i < nums.length; i++ ) {
        if ( nums[i] != nums[i-1] && nums[i] != nums[i+1] ) return nums[i];
    }

    return nums[nums.length];
}
export { singleNonDuplicate }
