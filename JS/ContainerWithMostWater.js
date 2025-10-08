/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} height
 * @return {number}
 */
function maxArea(height) {
    let max = 0;
    for (let i = 0, j = height.length - 1; i < j;) {
        const maxIndex = j - i;
        const _max = maxIndex * Math.min(height[i], height[j]);
        max = Math.max(max, _max);
        if (height[i] < height[j]) {
            i++;
        }
        else {
            j--;
        }
    }
    return max;
}
export { maxArea }
