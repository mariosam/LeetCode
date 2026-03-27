/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func constructProductMatrix(grid [][]int) [][]int {
	const MOD = 12345
	m, n := len(grid), len(grid[0])

	ans := make([][]int, m)
	for i := range ans {
		ans[i] = make([]int, n)
	}

	prefix := []int{1}
	suffix := 1

	// prefix
	for i := 0; i < m; i++ {
		for j := 0; j < n; j++ {
			last := prefix[len(prefix)-1]
			prefix = append(prefix, (last*grid[i][j])%MOD)
		}
	}

	// suffix + answer
	for i := m - 1; i >= 0; i-- {
		for j := n - 1; j >= 0; j-- {
			idx := i*n + j
			ans[i][j] = (prefix[idx] * suffix) % MOD
			suffix = (suffix * grid[i][j]) % MOD
		}
	}

	return ans
}
