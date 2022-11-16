/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func removeDuplicates(nums []int) int {
	total := 1

	for i := 1; i < len(nums); i++ {
		if nums[i] != nums[i-1] {
			nums[total] = nums[i]
			total++
		}
	}

	return total
}
