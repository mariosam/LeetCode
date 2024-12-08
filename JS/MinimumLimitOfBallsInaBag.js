/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} maxOperations
 * @return {number}
 */
function minimumSize(nums, maxOperations) {
    const r = Math.max(...nums);

    function binarySearch(low, high) {
        while (low <= high) {
            const mid = Math.floor((low + high) / 2);
            let cnt = 0;

            for (const x of nums) {
                cnt += Math.floor((x - 1) / mid);
            }

            if (cnt <= maxOperations) {
                high = mid - 1;
            } else {
                low = mid + 1;
            }
        }
        return low - 1;
    }

    return 1 + binarySearch(1, r);
}
export { minimumSize }
