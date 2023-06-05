/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func profitableSchemes(n int, minProfit int, group []int, profit []int) int {
	const mod = 1e9 + 7
	dp := make([][][]int, len(group)+1)

	for k := range dp {
		dp[k] = make([][]int, n+1)
		for k2 := range dp[k] {
			dp[k][k2] = make([]int, minProfit+1)
		}
	}

	dp[0][0][0] = 1
	for i := 0; i < len(group); i++ {
		for j := 0; j <= n; j++ {
			for k := 0; k <= minProfit; k++ {
				if j < group[i] {
					dp[i+1][j][k] = dp[i][j][k]
				} else {
					k2 := 0
					if k-profit[i] > 0 {
						k2 = k - profit[i]
					}
					dp[i+1][j][k] = dp[i][j][k] + dp[i][j-group[i]][k2]%mod
				}
			}
		}
	}

	sum := 0
	for _, v := range dp[len(group)] {
		sum = (sum + v[minProfit]) % mod
	}

	return sum
}
