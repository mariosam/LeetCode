/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number[][]} trust
 * @return {number}
 */
function findJudge(n, trust) {
    const arr = Array(n + 1).fill(0);
    let rv = -1;

    for (let i = 0; i < trust.length; i++) {
        arr[trust[i][1]]++;
    }

    for (let j = 1; j < arr.length; j++) {
        if (arr[j] === n - 1) {
            rv = j;
            break;
        }
    }

    for (let i = 0; i < trust.length; i++) {
        if (trust[i][0] === rv) {
            return -1;
        }
    }

    return rv;
}
export { findJudge }
