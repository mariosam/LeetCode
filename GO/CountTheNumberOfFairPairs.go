/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"sort"
)

func countFairPairs(nums []int, lower int, upper int) int64 {
	sort.Ints(nums)
	return countLess(nums, upper) - countLess(nums, lower-1)
}

func countLess(nums []int, sum int) int64 {
	var res int64 = 0
	j := len(nums) - 1

	for i := 0; i < j; i++ {
		for i < j && nums[i]+nums[j] > sum {
			j--
		}
		res += int64(j - i)
	}

	return res
}
