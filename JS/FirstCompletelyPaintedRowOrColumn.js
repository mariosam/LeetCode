/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @param {number[][]} mat
 * @return {number}
 */
function firstCompleteIndex(arr, mat) {
    let m = mat.length, n = mat[0].length;
    let idx = new Map();

    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            idx.set(mat[i][j], [i, j]);
        }
    }

    let row = new Array(m).fill(0);
    let col = new Array(n).fill(0);

    for (let k = 0; k < arr.length; k++) {
        let [i, j] = idx.get(arr[k]);
        row[i]++;
        col[j]++;

        if (row[i] === n || col[j] === m) {
            return k;
        }
    }
}
export { firstCompleteIndex }
