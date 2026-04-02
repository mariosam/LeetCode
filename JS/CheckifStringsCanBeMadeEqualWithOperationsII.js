/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s1
 * @param {string} s2
 * @return {boolean}
 */
function checkStrings(s1, s2) {
    const cnt1 = Array.from({ length: 2 }, () => Array(26).fill(0));
    const cnt2 = Array.from({ length: 2 }, () => Array(26).fill(0));

    for (let i = 0; i < s1.length; i++) {
        const idx1 = s1.charCodeAt(i) - 97;
        const idx2 = s2.charCodeAt(i) - 97;

        cnt1[i % 2][idx1]++;
        cnt2[i % 2][idx2]++;
    }

    for (let p = 0; p < 2; p++) {
        for (let c = 0; c < 26; c++) {
            if (cnt1[p][c] !== cnt2[p][c]) return false;
        }
    }

    return true;
}
export { checkStrings }
