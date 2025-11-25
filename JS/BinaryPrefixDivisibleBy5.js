/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {boolean[]}
 */
function prefixesDivBy5(nums) {
    const result = [];
    let remainder = 0;

    for (const a of nums) {
        remainder = ((remainder << 1) + a) % 5;
        result.push(remainder === 0);
    }

    return result;
}
export { prefixesDivBy5 }
