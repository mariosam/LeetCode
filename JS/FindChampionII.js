/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number[][]} edges
 * @return {number}
 */
function findChampion(n, edges) {
    let greater = Array.from({ length: n }, (_, i) => i);
    for (const edge of edges) {
        greater[edge[1]] = edge[0];
    }
    let valid = -1;
    for (let i = 0; i < n; i++) {
        if (greater[i] === i) {
            if (valid === -1) {
                valid = i;
            } else {
                return -1;
            }
        }
    }
    return valid;
}
export { findChampion }
