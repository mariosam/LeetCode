/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} minK
 * @param {number} maxK
 * @return {number}
 */
function countSubarrays(nums, minK, maxK) {
    let l = -1; 
    let r1 = -1;
    let r2 = -1;
    let tot = 0;

    for ( let i=0; i < nums.length; i++ ) {
        if ( nums[i] > maxK || nums[i] < minK ) l = i;
        if ( nums[i] == minK ) r1 = i;
        if ( nums[i] == maxK ) r2 = i;

        tot += Math.max(0, Math.min(r1, r2)-l);
    }

    return tot;
}
export { countSubarrays }
