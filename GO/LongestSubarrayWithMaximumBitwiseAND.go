/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func longestSubarray(nums []int) int {
	n := len(nums)

	max := nums[0]
	for i := 0; i < n; i++ {
		if nums[i] > max {
			max = nums[i]
		}
	}

	res := 0
	curLen := 0
	for i := 0; i < n; i++ {
		if nums[i] == max {
			curLen++
		} else {
			curLen = 0
		}
		if curLen > res {
			res = curLen
		}
	}
	return res
}
