/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} height
 * @return {number}
 */
function trap(height) {
    let n = height.length;
    let idx = 0, lefth = 0, righth = 0, area = 0;

    for (let i = 0; i < n; i++) {
        idx = height[idx] <= height[i] ? i : idx;
    }

    for (let i = 0; i < idx; i++) {
        if (height[i] < lefth) {
            area += lefth - height[i];
        } else {
            lefth = height[i];
        }
    }

    for (let i = n - 1; i > idx; i--) {
        if (height[i] < righth) {
            area += righth - height[i];
        } else {
            righth = height[i];
        }
    }

    return area;
};
export { trap }
