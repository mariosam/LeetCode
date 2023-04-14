/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minPathSum(grid [][]int) int {
	for i := 0; i < len(grid); i++ {
		for j := 0; j < len(grid[0]); j++ {
			if i == 0 && j > 0 {
				grid[i][j] = grid[i][j-1] + grid[i][j]
			} else if i > 0 && j == 0 {
				grid[i][j] = grid[i-1][j] + grid[i][j]
			} else if i > 0 && j > 0 {
				grid[i][j] = min(grid[i-1][j], grid[i][j-1]) + grid[i][j]
			}
		}
	}
	return grid[len(grid)-1][len(grid[0])-1]
}

func min(a int, b int) int {
	if a > b {
		return b
	} else {
		return a
	}
}
