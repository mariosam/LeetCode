/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func isArraySpecial(nums []int) bool {
	for i := 1; i < len(nums); i++ {
		if int(math.Abs(float64(nums[i]-nums[i-1])))%2 == 0 {
			return false
		}
	}
	return true
}
