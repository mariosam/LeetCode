/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function minimumPairRemoval(nums) {
    let arr = [...nums];
    let ans = 0;

    while (!isNonDecreasing(arr)) {
        let k = 0;
        let s = arr[0] + arr[1];

        for (let i = 1; i < arr.length - 1; i++) {
            let t = arr[i] + arr[i + 1];
            if (s > t) {
                s = t;
                k = i;
            }
        }

        arr[k] = s;
        arr.splice(k + 1, 1);
        ans++;
    }

    return ans;
}

function isNonDecreasing(arr) {
    for (let i = 1; i < arr.length; i++) {
        if (arr[i] < arr[i - 1]) {
            return false;
        }
    }
    return true;
}
export { minimumPairRemoval }
