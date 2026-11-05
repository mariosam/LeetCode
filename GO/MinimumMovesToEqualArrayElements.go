/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"sort"
)

func minMoves(nums []int) int {
	if len(nums) == 0 {
		return 0
	}
	sort.Ints(nums)
	minNum := nums[0]
	ans := 0

	for _, num := range nums {
		ans += num - minNum
	}
	return ans
}
