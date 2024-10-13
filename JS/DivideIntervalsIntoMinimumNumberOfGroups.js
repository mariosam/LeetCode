/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} intervals
 * @return {number}
 */
function minGroups(intervals) {
    const starts = intervals.map(interval => interval[0]);
    const ends = intervals.map(interval => interval[1]);

    // Sort the start and end arrays
    starts.sort((a, b) => a - b);
    ends.sort((a, b) => a - b);

    let groups = 0;
    let activeIntervals = 0;
    let i = 0, j = 0;

    // Two-pointer approach
    while (i < intervals.length) {
        if (starts[i] <= ends[j]) {
            activeIntervals++;
            i++;
        } else {
            activeIntervals--;
            j++;
        }

        groups = Math.max(groups, activeIntervals);
    }

    return groups;
}
export { minGroups }
