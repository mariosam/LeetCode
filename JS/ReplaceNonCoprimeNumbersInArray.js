/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function replaceNonCoprimes(nums) {
    const res = [];
    const gcd = (a, b) => b === 0 ? a : gcd(b, a % b);

    for (let x of nums) {
        res.push(x);
        while (res.length > 1) {
            let t1 = res[res.length - 1];
            let t2 = res[res.length - 2];
            let g = gcd(t1, t2);
            if (g <= 1) break;
            res.pop();
            res[res.length - 1] = t1 * (t2 / g);
        }
    }
    return res;
}
export { replaceNonCoprimes }
