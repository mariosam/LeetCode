/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} score
 * @return {string[]}
 */
function findRelativeRanks(score) {
    const result = new Array(score.length).fill("");
    const max = Math.max(...score);
    const hash = new Array(max + 1).fill(0);

    score.forEach((s, i) => {
        hash[s] = i + 1;
    });

    let place = 1;
    for (let i = hash.length - 1; i >= 0; i--) {
        if (hash[i] !== 0) {
            if (place === 1) {
                result[hash[i] - 1] = "Gold Medal";
            } else if (place === 2) {
                result[hash[i] - 1] = "Silver Medal";
            } else if (place === 3) {
                result[hash[i] - 1] = "Bronze Medal";
            } else {
                result[hash[i] - 1] = place.toString();
            }
            place++;
        }
    }
    return result;
}
export { findRelativeRanks }
