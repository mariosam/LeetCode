/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func minimumCost(source string, target string, original []byte, changed []byte, cost []int) int64 {
	inf := math.MaxInt / 2
	n := 26
	dp := make([][][]int, n+1)
	for i := range dp {
		dp[i] = make([][]int, n)
		for j := range dp[i] {
			dp[i][j] = make([]int, n)
		}
	}

	g := make([][]int, n)
	for i := range g {
		g[i] = make([]int, n)
		for j := range g[i] {
			if i != j {
				g[i][j] = inf
			}
		}
	}

	for i := 0; i < len(original); i++ {
		x, y, z := original[i]-'a', changed[i]-'a', cost[i]
		g[x][y] = min(g[x][y], z)
	}

	dp[0] = g
	for k := 0; k < n; k++ {
		for i := 0; i < n; i++ {
			for j := 0; j < n; j++ {
				dp[k+1][i][j] = min(dp[k][i][j], dp[k][i][k]+dp[k][k][j])
			}
		}
	}
	ans := 0
	for i := 0; i < len(source); i++ {
		a, b := source[i]-'a', target[i]-'a'
		if dp[n][a][b] >= inf {
			return -1
		}
		ans += dp[n][a][b]
	}
	return int64(ans)
}
