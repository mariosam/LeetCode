/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func minScoreTriangulation(values []int) int {
	n := len(values)
	dp := make([][]int, n)
	for i := range dp {
		dp[i] = make([]int, n)
	}

	for i := n - 3; i >= 0; i-- {
		for j := i + 2; j < n; j++ {
			dp[i][j] = math.MaxInt32
			for k := i + 1; k < j; k++ {
				dp[i][j] = minScore(dp[i][j], dp[i][k]+dp[k][j]+values[i]*values[j]*values[k])
			}
		}
	}
	return dp[0][n-1]
}

func minScore(a, b int) int {
	if a < b {
		return a
	}
	return b
}
