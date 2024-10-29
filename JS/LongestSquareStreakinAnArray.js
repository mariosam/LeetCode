/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function longestSquareStreak(nums) {
    nums.sort((a, b) => a - b);
    const map = new Map();
    let result = -1;

    for (const x of nums) {
        const perfect = Math.floor(Math.sqrt(x));
        if (perfect * perfect === x && map.has(perfect)) {
            const streak = map.get(perfect) + 1;
            map.set(x, streak);
            result = Math.max(result, streak);
        } else {
            map.set(x, 1);
        }
    }
    return result;
}
export { longestSquareStreak }
