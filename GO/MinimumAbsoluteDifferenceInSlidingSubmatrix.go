/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func minAbsDiff(grid [][]int, k int) [][]int {
	m, n := len(grid), len(grid[0])

	ans := make([][]int, m-k+1)
	for i := range ans {
		ans[i] = make([]int, n-k+1)
	}

	for i := 0; i <= m-k; i++ {
		for j := 0; j <= n-k; j++ {

			var nums []int

			for x := i; x < i+k; x++ {
				for y := j; y < j+k; y++ {
					nums = append(nums, grid[x][y])
				}
			}

			sort.Ints(nums)

			d := int(^uint(0) >> 1)

			for t := 1; t < len(nums); t++ {
				a, b := nums[t-1], nums[t]

				if a != b && absDiff(a-b) < d {
					d = absDiff(a - b)
				}
			}

			if d == int(^uint(0)>>1) {
				ans[i][j] = 0
			} else {
				ans[i][j] = d
			}
		}
	}

	return ans
}

func absDiff(x int) int {
	if x < 0 {
		return -x
	}
	return x
}
