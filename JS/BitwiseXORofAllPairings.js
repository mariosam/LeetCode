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
function xorAllNums(nums1, nums2) {
    let xors1 = nums1.reduce((acc, num) => acc ^ num, 0);
    let xors2 = nums2.reduce((acc, num) => acc ^ num, 0);

    return (nums1.length % 2 * xors2) ^ (nums2.length % 2 * xors1);
}
export { xorAllNums }
