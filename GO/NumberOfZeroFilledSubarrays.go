/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func zeroFilledSubarray(nums []int) int64 {
	var ans int64
	var c int

	for i := range nums {
		if nums[i] == 0 {
			c++
			ans += int64(c)
		} else {
			c = 0
		}
	}

	return ans
}
