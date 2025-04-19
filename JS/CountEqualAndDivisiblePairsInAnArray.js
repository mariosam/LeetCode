/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} k
 * @return {number}
 */
function countPairs(nums, k) {
    const map = new Map();

    nums.forEach((v, i) => {
        if (!map.has(v)) {
            map.set(v, []);
        }
        map.get(v).push(i);
    });

    let result = 0;
    for (const indices of map.values()) {
        for (let i = 0; i < indices.length - 1; i++) {
            for (let j = i + 1; j < indices.length; j++) {
                if ((indices[i] * indices[j]) % k === 0) {
                    result++;
                }
            }
        }
    }

    return result;
}
export { countPairs }
