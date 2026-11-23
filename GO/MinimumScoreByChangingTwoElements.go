/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func minimizeSum(nums []int) int {
	sort.Ints(nums)
	n := len(nums)

	highOfChangingTwoMins := nums[n-1] - nums[2]
	highOfChangingTwoMaxs := nums[n-3] - nums[0]
	highOfChangingMinAndMax := nums[n-2] - nums[1]

	return min(highOfChangingTwoMins, highOfChangingTwoMaxs, highOfChangingMinAndMax)
}
