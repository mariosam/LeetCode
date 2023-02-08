/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function firstMissingPositive(nums) {
    nums.sort(function(a, b) { return a - b; });
    let l = nums.length;
	let start = -1;

    for ( let i = 0; i < l; i++ ) {
		if ( nums[i] > 0 ) {
			start = i;
			break;
		}
	}
	if ( start == -1 ) return 1;

	let currentL = l - start;
	if ( currentL == 0 ) return 1;
	if ( nums[start] > 1 ) return 1;

	for ( let i = start; i < l-1; i++ ) {
		if ( nums[i+1]-nums[i] > 1 ) {
			return nums[i] + 1;
		}
	}

	return nums[l-1] + 1;
}
export { firstMissingPositive }
