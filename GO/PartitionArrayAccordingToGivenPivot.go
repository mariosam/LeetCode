/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func pivotArray(nums []int, pivot int) []int {
	res := make([]int, len(nums))

	k := 0
	for i := 0; i < len(nums); i++ {
		if nums[i] < pivot {
			res[k] = nums[i]
			k++
		}
	}
	for i := 0; i < len(nums); i++ {
		if nums[i] == pivot {
			res[k] = nums[i]
			k++
		}
	}
	for i := 0; i < len(nums); i++ {
		if nums[i] > pivot {
			res[k] = nums[i]
			k++
		}
	}
	return res
}
