/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function findErrorNums(nums) {
    const n = nums.length;
    const s1 = (n * (n + 1)) / 2;
    let s2 = 0, s = 0;
    const set = new Set();
    
    for (const x of nums) {
        if (!set.has(x)) {
            set.add(x);
            s2 += x;
        }
        s += x;
    }

    return [s - s2, s1 - s2];
};
export { findErrorNums }
