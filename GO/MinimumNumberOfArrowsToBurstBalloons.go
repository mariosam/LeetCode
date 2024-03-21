/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func findMinArrowShots(points [][]int) int {
	sort.Slice(points, func(i, j int) bool {
		return points[i][0] < points[j][0]
	})
	ret := 1
	for i := 1; i < len(points); i++ {
		if points[i][0] > points[i-1][1] {
			ret++
		} else {
			points[i][1] = min(points[i][1], points[i-1][1])
		}
	}
	return ret
}
