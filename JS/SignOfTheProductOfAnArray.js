/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function arraySign(nums) {
    if (nums.includes(0)) return 0;
    
    let minusTimes = 0;
    nums.forEach((item) => {
        if (item < 0) {
            minusTimes++;
        }
    });
    
    return minusTimes % 2 === 0 ? 1 : -1;
}
export { arraySign }
