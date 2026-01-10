/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func maxMatrixSum(matrix [][]int) int64 {
	s := 0
	cnt, mi := 0, math.MaxInt32
	for _, row := range matrix {
		for _, v := range row {
			s += absMS(v)
			mi = min(mi, abs(v))
			if v < 0 {
				cnt++
			}
		}
	}
	if cnt%2 == 1 {
		s -= mi * 2
	}
	return int64(s)
}

func absMS(x int) int {
	if x < 0 {
		return -x
	}
	return x
}
