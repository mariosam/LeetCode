/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} text1
 * @param {string} text2
 * @return {number}
 */
function longestCommonSubsequence(text1, text2) {
    const text1Array = text1.split('');
    const text2Array = text2.split('');
    const m = text1Array.length;
    const n = text2Array.length;
    const array = new Array(m).fill().map(() => new Array(n).fill(0));

    // init
    array[0][0] = text1Array[0] === text2Array[0] ? 1 : 0;
    for (let i = 1; i < m; i++) {
        array[i][0] = Math.max(array[i - 1][0], text1Array[i] === text2Array[0] ? 1 : 0);
    }
    for (let i = 1; i < n; i++) {
        array[0][i] = Math.max(array[0][i - 1], text2Array[i] === text1Array[0] ? 1 : 0);
    }

    // dp
    for (let i = 1; i < m; i++) {
        for (let j = 1; j < n; j++) {
            array[i][j] = Math.max(array[i - 1][j], array[i][j - 1]);
            if (text1Array[i] === text2Array[j]) {
                array[i][j] = Math.max(array[i - 1][j - 1] + 1, array[i][j]);
            }
        }
    }

    return array[m - 1][n - 1];
}
export { longestCommonSubsequence }
