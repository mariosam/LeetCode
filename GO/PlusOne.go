/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func plusOne(digits []int) []int {
	for i := len(digits) - 1; i >= 0; i-- {
		digits[i]++

		if digits[i] > 9 {
			digits[i] = 0
		} else {
			return digits
		}
	}

	return append([]int{1}, digits...)
}
