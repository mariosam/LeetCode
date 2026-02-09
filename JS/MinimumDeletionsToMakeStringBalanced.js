/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function minimumDeletions(s) {
    const n = s.length;
    let rightA = 0;

    for (let i = 0; i < n; i++) {
        if (s[i] === 'a') rightA++;
    }

    let leftB = 0;
    let res = rightA;

    for (let i = 0; i < n; i++) {
        if (s[i] === 'a') {
            rightA--;
        } else {
            leftB++;
        }
        res = Math.min(res, leftB + rightA);
    }

    return res;
}
export { minimumDeletions }
