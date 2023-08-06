/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} intervals
 * @return {number}
 */
function eraseOverlapIntervals(intervals) {
    intervals.sort((a, b) => a[1] - b[1]);
    let t = intervals[0][1];
    let ans = 0;
    
    for (let i = 1; i < intervals.length; i++) {
        if (intervals[i][0] >= t) {
            t = intervals[i][1];
        } else {
            ans++;
        }
    }

    return ans;
}
export { eraseOverlapIntervals }
