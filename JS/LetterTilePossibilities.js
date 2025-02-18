/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} tiles
 * @return {number}
 */
function numTilePossibilities(tiles) {
    let record = new Array(26).fill(0);
    for (let c of tiles) {
        record[c.charCodeAt(0) - 'A'.charCodeAt(0)]++;
    }
    return dfs(record);
}

function dfs(arr) {
    let sum = 0;
    for (let i = 0; i < 26; i++) {
        if (arr[i] === 0) continue;
        sum++;
        arr[i]--;
        sum += dfs(arr);
        arr[i]++;
    }
    return sum;
}
export { numTilePossibilities }
