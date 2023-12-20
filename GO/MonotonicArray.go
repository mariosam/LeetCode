/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func isMonotonic(nums []int) bool {
	isIncr, isDecr := false, false
	for i, v := range nums[1:] {
		if v < nums[i] {
			isIncr = true
		} else if v > nums[i] {
			isDecr = true
		}
		if isIncr && isDecr {
			return false
		}
	}
	return true
}
