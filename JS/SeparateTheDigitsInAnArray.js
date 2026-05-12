/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function separateDigits(nums) {
    const res = [];

    for (const x0 of nums) {
        let x = x0;
        const cur = [];

        while (x > 0) {
            cur.push(x % 10);
            x = Math.floor(x / 10);
        }
        cur.reverse();

        for (const digit of cur) {
            res.push(digit);
        }
    }

    return res;
};
export { separateDigits }
