/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} spells
 * @param {number[]} potions
 * @param {number} success
 * @return {number[]}
 */
function successfulPairs(spells, potions, success) {
    let n = spells.length, m = potions.length;
    potions.sort(function(a, b) { return a - b; });
    let pairs = [n];

    for (let i=0; i < n; i++) {
        let left = 0, right = m - 1;

        while (left < right) {
            let mid = Math.trunc((right - left) / 2) + left;
            
            if (potions[mid] * spells[i] >= success) {
                right = mid;
            } else {
                left = mid + 1;
            }
        }

        if (potions[left] * spells[i] < success) {
            left++;
        }
        pairs[i] = m - left;
    }

    return pairs;
};
export { successfulPairs }
