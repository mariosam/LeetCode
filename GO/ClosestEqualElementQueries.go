/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func solveQueries(nums []int, queries []int) []int {
	n := len(nums)
	m := n * 2

	d := make([]int, m)
	for i := range d {
		d[i] = m
	}

	left := make(map[int]int)
	for i := 0; i < m; i++ {
		x := nums[i%n]
		if prev, ok := left[x]; ok {
			d[i] = int(math.Min(float64(d[i]), float64(i-prev)))
		}
		left[x] = i
	}

	right := make(map[int]int)
	for i := m - 1; i >= 0; i-- {
		x := nums[i%n]
		if next, ok := right[x]; ok {
			d[i] = int(math.Min(float64(d[i]), float64(next-i)))
		}
		right[x] = i
	}

	for i := 0; i < n; i++ {
		if d[i+n] < d[i] {
			d[i] = d[i+n]
		}
	}

	ans := make([]int, len(queries))
	for i, q := range queries {
		if d[q] >= n {
			ans[i] = -1
		} else {
			ans[i] = d[q]
		}
	}

	return ans
}
