/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} nums
 * @return {string}
 */
function findDifferentBinaryString(nums) {
    let res = "";

    for (let i = 0; i < nums.length; i++) {
        // Pega o caractere da diagonal e inverte (se 0 vira 1, se 1 vira 0)
        res += nums[i][i] === '0' ? '1' : '0';
    }

    return res;
}
export { findDifferentBinaryString }
