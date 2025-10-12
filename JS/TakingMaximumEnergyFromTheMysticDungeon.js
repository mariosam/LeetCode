/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} energy
 * @param {number} k
 * @return {number}
 */
function maximumEnergy(energy, k) {
    const n = energy.length;
    const f = new Array(n + 1).fill(0);

    for (let i = n - 1; i >= 0; i--) {
        const next = Math.min(n, i + k);
        f[i] = energy[i] + f[next];
    }

    return Math.max(...f.slice(0, n));
};
export { maximumEnergy }
