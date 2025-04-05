/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maximumTripletValue(nums []int) int64 {
	n := len(nums)
	var res int64 = 0

	for i := 0; i < n-2; i++ {
		for j := i + 1; j < n-1; j++ {
			for k := j + 1; k < n; k++ {
				if nums[i] < 0 && nums[j] < 0 && nums[k] < 0 {
					continue
				}
				res = maxTrip(res, int64(nums[i]-nums[j])*int64(nums[k]))
			}
		}
	}

	return res
}

func maxTrip(a, b int64) int64 {
	if a > b {
		return a
	}
	return b
}
