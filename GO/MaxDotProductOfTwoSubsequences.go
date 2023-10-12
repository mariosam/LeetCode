/**
 * @version GO 1.21.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func maxDotProduct(nums1 []int, nums2 []int) int {
	m := len(nums1)
	n := len(nums2)
	dp := make([][]int, m+1)
	for i := range dp {
		dp[i] = make([]int, n+1)
		for j := range dp[i] {
			dp[i][j] = math.MinInt64
		}
	}

	for i := 1; i <= m; i++ {
		for j := 1; j <= n; j++ {
			dp[i][j] = maxDot(dp[i-1][j], dp[i][j-1])
			dp[i][j] = maxDot(dp[i][j], max(0, dp[i-1][j-1])+nums1[i-1]*nums2[j-1])
		}
	}

	return dp[m][n]
}

func maxDot(a, b int) int {
	if a > b {
		return a
	}
	return b
}
