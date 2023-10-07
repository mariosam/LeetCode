/**
 * @version GO 1.21
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func PredictTheWinner(nums []int) bool {
	n := len(nums)
	dp := make([][]int, n)
	for i := 0; i < n; i++ {
		dp[i] = make([]int, n)
		dp[i][i] = nums[i]
	}

	for length := 1; length < n; length++ {
		for i := 0; i < n-length; i++ {
			j := i + length
			dp[i][j] = max(nums[i]-dp[i+1][j], nums[j]-dp[i][j-1])
		}
	}

	return dp[0][n-1] >= 0
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}
