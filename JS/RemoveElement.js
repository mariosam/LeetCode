/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} val
 * @return {number}
 */
function removeElement(nums, val) {
    let count = 0;

    for ( let i = 0; i < nums.length; i++ ) {
        if ( nums[i] != val ) {
            nums[count] = nums[i];
            count++;
        }
    }
    
    return count;
}
export { removeElement }
