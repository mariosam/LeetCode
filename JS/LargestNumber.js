/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {string}
 */
function largestNumber(nums) {
    let list = nums.map(String);

    list.sort((a, b) => {
        let s1 = a + b;
        let s2 = b + a;
        return s2.localeCompare(s1);
    });

    if (list[0] === "0") {
        return "0";
    }

    return list.join('');
}
export { largestNumber }
