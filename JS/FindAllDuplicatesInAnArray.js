/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function findDuplicates(nums) {
    let res = [];
    for(let i = 0,len = nums.length; i<len; i++){
        let cur = Math.abs(nums[i]);
        let curIndex = cur - 1;
        if(nums[curIndex] < 0){
            res.push(cur);
        }
        nums[curIndex] = -nums[curIndex];
    }
    return res;
}
export { findDuplicates }
