/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums1
 * @param {number[]} nums2
 * @return {number}
 */
function findMedianSortedArrays(nums1, nums2) {
    let ar = nums1.concat(nums2);
    ar.sort(function(a,b){return a - b});

    if ( ar.length%2 == 0 ) return (ar[ar.length/2] + ar[(ar.length/2)-1])/2;

    return ar[(ar.length-1)/2];
};
export { findMedianSortedArrays }
