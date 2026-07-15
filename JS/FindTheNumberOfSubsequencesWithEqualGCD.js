/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function subsequencePairCount(nums) {
    const MOD = 1000000007;
    const MAX = 200;

    // Precompute gcd table.
    const gcd = Array.from({ length: MAX + 1 }, () => new Uint16Array(MAX + 1));

    for (let i = 0; i <= MAX; i++) {
        gcd[i][0] = i;
        gcd[0][i] = i;
    }

    for (let i = 1; i <= MAX; i++) {
        for (let j = 1; j <= MAX; j++) {
            let a = i;
            let b = j;
            while (b !== 0) {
                const t = a % b;
                a = b;
                b = t;
            }
            gcd[i][j] = a;
        }
    }

    const SIZE = MAX + 1;
    let dp = Array.from({ length: SIZE }, () => new Int32Array(SIZE));
    dp[0][0] = 1;

    for (const num of nums) {
        const next = dp.map(row => Int32Array.from(row));
        for (let g1 = 0; g1 <= MAX; g1++) {
            for (let g2 = 0; g2 <= MAX; g2++) {
                const cur = dp[g1][g2];
                if (cur === 0) continue;
                const ng1 = gcd[g1][num];
                const ng2 = gcd[g2][num];
                next[ng1][g2] += cur;
                if (next[ng1][g2] >= MOD) next[ng1][g2] -= MOD;
                next[g1][ng2] += cur;
                if (next[g1][ng2] >= MOD) next[g1][ng2] -= MOD;
            }
        }
        dp = next;
    }

    let ans = 0;
    for (let g = 1; g <= MAX; g++) {
        ans += dp[g][g];
        ans %= MOD;
    }
    return ans;
}
export { subsequencePairCount }
