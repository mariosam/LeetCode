/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func singleNonDuplicate(nums []int) int {
	if len(nums) == 1 {
		return nums[0]
	}
	sort.Ints(nums)
	if nums[0] != nums[1] {
		return nums[0]
	}

	for i := 1; i < len(nums)-1; i++ {
		if nums[i] != nums[i-1] && nums[i] != nums[i+1] {
			return nums[i]
		}
	}

	return nums[len(nums)-1]
}
