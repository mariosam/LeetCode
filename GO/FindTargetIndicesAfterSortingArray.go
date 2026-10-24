/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func targetIndices(nums []int, target int) []int {
	sort.Ints(nums)
	ans := []int{}

	for i := 0; i < len(nums); i++ {
		if nums[i] == target {
			ans = append(ans, i)
		}
	}
	return ans
}
