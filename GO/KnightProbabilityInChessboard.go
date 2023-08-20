/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

var dirs = [][]int{{-1, 2}, {-1, -2}, {1, -2}, {1, 2}, {-2, 1}, {-2, -1}, {2, 1}, {2, -1}}

func knightProbability(n int, k int, row int, column int) float64 {
	dp := make([][][]float64, n)
	for i := 0; i < n; i++ {
		dp[i] = make([][]float64, n)
		for j := 0; j < n; j++ {
			dp[i][j] = make([]float64, k+1)
			dp[i][j][0] = 1
		}
	}

	for p := 1; p <= k; p++ {
		for i := 0; i < n; i++ {
			for j := 0; j < n; j++ {
				for _, dir := range dirs {
					nx, ny := i+dir[0], j+dir[1]

					if nx < 0 || nx >= n || ny < 0 || ny >= n {
						continue
					}

					dp[i][j][p] += dp[nx][ny][p-1] / 8
				}
			}
		}
	}

	return dp[row][column][k]
}
