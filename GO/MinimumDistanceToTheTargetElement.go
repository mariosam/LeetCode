/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func getMinDistance(nums []int, target int, start int) int {
	for i := 0; start+i < len(nums) || start-i >= 0; i++ {
		if (start + i) < len(nums) {
			if nums[start+i] == target {
				return i
			}
		}
		if (start - i) >= 0 {
			if nums[start-i] == target {
				return i
			}
		}
	}
	return -1
}
