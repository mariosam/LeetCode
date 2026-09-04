/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums1
 * @return {boolean}
 */
function uniformArray(nums1) {
    const n = nums1.length;
    let evenCnt = 0;
    let oddCnt = 0;

    for (let i = 0; i < n; i++) {
        if (nums1[i] % 2 === 0) {
            evenCnt++;
        } else {
            oddCnt++;
        }
    }

    return (evenCnt >= 1 && oddCnt >= 1) ||
           evenCnt === 0 ||
           oddCnt === 0;
}
export { uniformArray }
