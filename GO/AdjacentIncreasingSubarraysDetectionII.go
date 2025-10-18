/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxIncreasingSubarrays(nums []int) int {
	ans, pre, cur := 0, 0, 0
	n := len(nums)

	for i := 0; i < n; i++ {
		cur++
		if i == n-1 || nums[i] >= nums[i+1] {
			ans = maxIS(ans, maxIS(cur/2, minIS(pre, cur)))
			pre = cur
			cur = 0
		}
	}
	return ans
}

func maxIS(a, b int) int {
	if a > b {
		return a
	}
	return b
}

func minIS(a, b int) int {
	if a < b {
		return a
	}
	return b
}
