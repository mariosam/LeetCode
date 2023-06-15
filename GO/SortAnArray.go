/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math/rand"

func sortArray(nums []int) []int {
	if len(nums) < 2 {
		return nums
	}

	lesser, greater := 0, len(nums)-1
	pivot := rand.Intn(len(nums))

	nums[pivot], nums[greater] = nums[greater], nums[pivot]

	for i := range nums {
		if nums[i] < nums[greater] {
			nums[lesser], nums[i] = nums[i], nums[lesser]
			lesser++
		}
	}

	nums[lesser], nums[greater] = nums[greater], nums[lesser]

	sortArray(nums[:lesser])
	sortArray(nums[lesser+1:])

	return nums
}
