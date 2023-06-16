/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function sortArray(nums) {
    let arr = new Array(50001).fill().map(() => [0, 0]);
    let ans = [];

    for (let num of nums) {
        let n = num;
        let s = 1;
        if (n < 0) {
            n *= -1;
            s--;
        }
        arr[n][s]++;
    }

    for (let i = 50000; i >= 0; i--) {
        for (let j = arr[i][0]; j > 0; j--) {
            ans.push(i * -1);
        }
    }

    for (let i = 0; i <= 50000; i++) {
        for (let j = arr[i][1]; j > 0; j--) {
            ans.push(i);
        }
    }

    return ans;
};
export { sortArray }
