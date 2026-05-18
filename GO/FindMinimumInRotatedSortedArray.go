/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findMin(nums []int) int {
	min := nums[0]

	for i := 0; i < len(nums); i++ {
		if nums[i] < min {
			return nums[i]
		}
	}
	return min
}
