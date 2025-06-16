/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxAdjacentDistance(nums []int) int {
	n := len(nums)
	ans := absAdj(nums[0] - nums[n-1])

	for i := 1; i < n; i++ {
		ans = maxAdj(ans, absAdj(nums[i]-nums[i-1]))
	}

	return ans
}

func absAdj(x int) int {
	if x < 0 {
		return -x
	}
	return x
}

func maxAdj(a, b int) int {
	if a > b {
		return a
	}
	return b
}
