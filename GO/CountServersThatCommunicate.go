/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countServers(grid [][]int) int {
	m, n, res := len(grid), len(grid[0]), 0
	r := make([]int, m)
	c := make([]int, n)

	for i := 0; i < m; i++ {
		for j := 0; j < n; j++ {
			if grid[i][j] == 1 {
				r[i]++
				c[j]++
			}
		}
	}

	for i := 0; i < m; i++ {
		for j := 0; j < n; j++ {
			if grid[i][j] == 1 && (r[i]+c[j] > 2) {
				res++
			}
		}
	}
	return res
}
