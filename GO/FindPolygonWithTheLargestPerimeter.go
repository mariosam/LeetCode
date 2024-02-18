/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func largestPerimeter(nums []int) int64 {
	sort.Ints(nums)
	n := len(nums)
	s := make([]int64, n+1)

	for i := 1; i <= n; i++ {
		s[i] = s[i-1] + int64(nums[i-1])
	}

	var ans int64 = -1

	for k := 3; k <= n; k++ {
		if s[k-1] > int64(nums[k-1]) {
			ans = maxLP(ans, s[k])
		}
	}

	return ans
}

func maxLP(a, b int64) int64 {
	if a > b {
		return a
	}
	return b
}
