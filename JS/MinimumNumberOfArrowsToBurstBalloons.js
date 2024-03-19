/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} points
 * @return {number}
 */
function findMinArrowShots(points) {
    points.sort((a, b) => a[0] - b[0]);
    let ret = 1;
    for (let i = 1; i < points.length; i++) {
        if (points[i][0] > points[i - 1][1]) {
            ret++;
        } else {
            points[i][1] = Math.min(points[i][1], points[i - 1][1]);
        }
    }
    return ret;
}
export { findMinArrowShots }
