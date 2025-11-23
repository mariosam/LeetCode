/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func intersectionSizeTwo(intervals [][]int) int {
	// Sort by end ASC, and if tie, start DESC
	sort.Slice(intervals, func(i, j int) bool {
		if intervals[i][1] == intervals[j][1] {
			return intervals[i][0] > intervals[j][0]
		}
		return intervals[i][1] < intervals[j][1]
	})

	res := 2
	a := intervals[0][1] - 1
	b := intervals[0][1]

	for _, iv := range intervals {
		s, e := iv[0], iv[1]

		if s <= a {
			continue
		} else if s <= b {
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
