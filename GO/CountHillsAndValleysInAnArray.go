/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countHillValley(nums []int) int {
	left := nums[0]
	count := 0

	for i := 1; i < len(nums)-1; i++ {
		if (left < nums[i] && nums[i] > nums[i+1]) ||
			(left > nums[i] && nums[i] < nums[i+1]) {
			count++
			left = nums[i]
		}
	}
	return count
}
