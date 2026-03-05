/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} mat
 * @return {number}
 */
function numSpecial(mat) {
    const m = mat.length;
    const n = mat[0].length;
    let ans = 0;

    const rowOnes = new Array(m).fill(0);
    const colOnes = new Array(n).fill(0);

    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            if (mat[i][j] === 1) {
                rowOnes[i]++;
                colOnes[j]++;
            }
        }
    }

    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            if (mat[i][j] === 1 && rowOnes[i] === 1 && colOnes[j] === 1) {
                ans++;
            }
        }
    }

    return ans;
}
export { numSpecial }
