/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} answerKey
 * @param {number} k
 * @return {number}
 */
function maxConsecutiveAnswers(answerKey, k) {
    const get = function (c, k, answerKey) {
        let l = -1;
        let r = -1;
        while (r < answerKey.length - 1) {
            r++;
            if (answerKey[r] === c) {
                k--;
            }
            if (k < 0) {
                l++;
                if (answerKey[l] === c) {
                    k++;
                }
            }
        }
        return r - l;
    };
    return Math.max(get('T', k, answerKey), get('F', k, answerKey));
}
export { maxConsecutiveAnswers }
