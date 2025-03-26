/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number[][]} rectangles
 * @return {boolean}
 */
function checkValidCuts(n, rectangles) {
    rectangles.sort((a, b) => a[0] - b[0]);
    let max = rectangles[0][2];
    let cnt = 0;

    for (let i = 1; i < rectangles.length; i++) {
        if (rectangles[i][0] >= max) {
            cnt++;
        }
        max = Math.max(max, rectangles[i][2]);
    }

    if (cnt >= 2) {
        return true;
    }

    rectangles.sort((a, b) => a[1] - b[1]);
    max = rectangles[0][3];
    cnt = 0;

    for (let i = 1; i < rectangles.length; i++) {
        if (rectangles[i][1] >= max) {
            cnt++;
        }
        max = Math.max(max, rectangles[i][3]);
    }

    return cnt >= 2;
}
export { checkValidCuts }
