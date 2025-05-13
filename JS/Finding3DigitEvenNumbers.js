/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} digits
 * @return {number[]}
 */
function findEvenNumbers(digits) {
    const records = Array(10).fill(0);
    for (const d of digits) {
        records[d]++;
    }

    const results = new Set();

    function dfs(i, x) {
        if (i === 3) {
            results.add(x);
            return;
        }

        for (let d = 0; d < 10; d++) {
            if (records[d] === 0) continue;
            if ((i === 0 && d === 0) || (i === 2 && d % 2 !== 0)) continue;

            records[d]--;
            dfs(i + 1, x * 10 + d);
            records[d]++;
        }
    }

    dfs(0, 0);
    return Array.from(results).sort((a, b) => a - b);
}
export { findEvenNumbers }
