/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func minGroups(intervals [][]int) int {
	starts := make([]int, len(intervals))
	ends := make([]int, len(intervals))

	// Fill the start and end arrays
	for i := 0; i < len(intervals); i++ {
		starts[i] = intervals[i][0]
		ends[i] = intervals[i][1]
	}

	// Sort the start and end arrays
	sort.Ints(starts)
	sort.Ints(ends)

	groups := 0
	activeIntervals := 0
	i, j := 0, 0

	// Two-pointer approach
	for i < len(intervals) {
		if starts[i] <= ends[j] {
			activeIntervals++
			i++
		} else {
			activeIntervals--
			j++
		}

		if activeIntervals > groups {
			groups = activeIntervals
		}
	}

	return groups
}
