/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums1
 * @param {number} m
 * @param {number[]} nums2
 * @param {number} n
 * @return {void} Do not return anything, modify nums1 in-place instead.
 */
function merge(nums1, m, nums2, n) {
    for ( let i=m, j=0; i < nums1.length; i++, j++ ) {
        nums1[i] = nums2[j];
    }
    
    nums1.sort(function(a,b){return a - b});

    if ( m == 0 ) nums1 = nums2;

    return nums1;
};
export { merge }
