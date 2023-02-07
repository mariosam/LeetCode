/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function firstMissingPositive(nums) {
    nums = nums.filter((el, i) => nums.indexOf(el) === i);
    nums.sort(function(a, b) { return a - b; });
    let i = 1;

    nums.forEach(function(num){
        if ( num > 0 ) {
            if ( num == i ) {
                i++;
            } else {
                return i;
            }
        }
    });
    
    return i;
}
export { firstMissingPositive }
