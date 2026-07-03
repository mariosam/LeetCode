/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function maximumLength(nums) {
    const maxNum = Math.max(...nums);
    const count = new Map();

    for (const num of nums) {
        count.set(num, (count.get(num) || 0) + 1);
    }

    let ans = count.has(1)
        ? count.get(1) - (count.get(1) % 2 === 0 ? 1 : 0)
        : 1;

    for (const num of nums) {
        if (num === 1) {
            continue;
        }

        let length = 0;
        let x = num;

        while (
            x <= maxNum &&
            count.has(x) &&
            count.get(x) >= 2
        ) {
            length += 2;
            x *= x;
        }

        ans = Math.max(
            ans,
            length + (count.has(x) ? 1 : -1)
        );
    }
    return ans;
}
export { maximumLength }
