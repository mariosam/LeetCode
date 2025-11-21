/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} intervals
 * @return {number}
 */
function intersectionSizeTwo(intervals) {
    intervals.sort((a, b) => a[1] === b[1] ? b[0] - a[0] : a[1] - b[1]);
    let res = 2
    let a = intervals[0][1] - 1, b = intervals[0][1]

    for(const [s, e] of intervals) {
        if(s <= a) continue
        else if(s <= b) {
            res++
            a = b
            b = e
        } else {
            res += 2
            a = e - 1
            b = e
        }
    }

    return res
}
export { intersectionSizeTwo }
