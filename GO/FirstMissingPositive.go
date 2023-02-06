/**
 * @version GO 1.19.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func firstMissingPositive(nums []int) int {
	result := 1
	for ar_contains(nums, result) {
		result++
	}
	return result
}

func ar_contains(s []int, e int) bool {
	for _, a := range s {
		if a == e {
			return true
		}
	}
	return false
}
