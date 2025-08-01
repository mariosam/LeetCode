/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @return {number}
 */
function subarrayBitwiseORs(arr) {
    let cur = new Array(33).fill(0);
    let next = new Array(33).fill(0);
    let n1 = 0;
    const set = new Set();

    for (let a of arr) {
        let n2 = 0;
        next[n2++] = a;
        set.add(a);
        for (let i = 0; i < n1; i++) {
            let a2 = a | cur[i];
            if (a2 !== a) {
                a = a2;
                next[n2++] = a;
                set.add(a);
            }
        }
        [cur, next] = [next, cur];
        n1 = n2;
    }

    return set.size;
}
export { subarrayBitwiseORs }
