/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} intervals
 * @return {number}
 */
function removeCoveredIntervals(intervals) {
    intervals.sort((a, b) => {
        if (a[0] === b[0]) {
            return b[1] - a[1];
        }
        return a[0] - b[0];
    });

    let ans = 0;
    let prevEnd = 0;

    for (const interval of intervals) {
        if (prevEnd < interval[1]) {
            prevEnd = interval[1];
            ans++;
        }
    }
    return ans;
}
export { removeCoveredIntervals }
