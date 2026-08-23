/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} coins
 * @param {number} k
 * @return {number}
 */
function findKthSmallest(coins, k) {
    const n = coins.length;
    const M = 1 << n;
    const lcm = new Array(M).fill(0);
    lcm[0] = 1;

    function gcd(a, b) {
        while (a > 0) {
            const tmp = a;
            a = b % a;
            b = tmp;
        }
        return b;
    }

    function bitCount(x) {
        let count = 0;
        while (x > 0) {
            x &= x - 1;
            count++;
        }
        return count;
    }
    for (let i = 0; i < n; i++) {
        const v = coins[i];

        for (let j = 0; j < (1 << i); j++) {
            lcm[j | (1 << i)] =
                (v / gcd(lcm[j], v)) * lcm[j];
        }
    }

    let l = 1;
    let r = coins[0] * k;

    while (l <= r) {
        const md = Math.floor((l + r) / 2);
        let cnt = 0;

        for (let i = 1; i < M; i++) {
            if (bitCount(i) % 2 === 0) {
                cnt -= Math.floor(md / lcm[i]);
            } else {
                cnt += Math.floor(md / lcm[i]);
            }
        }

        if (cnt >= k) {
            r = md - 1;
        } else {
            l = md + 1;
        }
    }

    return l;
}
export { findKthSmallest }
