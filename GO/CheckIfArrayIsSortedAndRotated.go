/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func checkASR(nums []int) bool {
	countOutOfOrder := 0

	n := len(nums)
	for i := 0; i < n; i++ {
		if nums[i] > nums[(i+1)%n] {
			countOutOfOrder++
		}
	}
	return countOutOfOrder <= 1
}
