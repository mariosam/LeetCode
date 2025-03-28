/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func checkValidCuts(n int, rectangles [][]int) bool {
	sort.Slice(rectangles, func(i, j int) bool {
		return rectangles[i][0] < rectangles[j][0]
	})

	max := rectangles[0][2]
	cnt := 0

	for i := 1; i < len(rectangles); i++ {
		if rectangles[i][0] >= max {
			cnt++
		}
		if rectangles[i][2] > max {
			max = rectangles[i][2]
		}
	}

	if cnt >= 2 {
		return true
	}

	sort.Slice(rectangles, func(i, j int) bool {
		return rectangles[i][1] < rectangles[j][1]
	})

	max = rectangles[0][3]
	cnt = 0

	for i := 1; i < len(rectangles); i++ {
		if rectangles[i][1] >= max {
			cnt++
		}
		if rectangles[i][3] > max {
			max = rectangles[i][3]
		}
	}

	return cnt >= 2
}
