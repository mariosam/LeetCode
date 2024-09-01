/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countSubIslands(grid1 [][]int, grid2 [][]int) int {
	ans := 0

	for i := 0; i < len(grid2); i++ {
		for j := 0; j < len(grid2[0]); j++ {
			if grid2[i][j] == 1 {
				ans += dfs_csi(grid1, grid2, i, j)
			}
		}
	}

	return ans
}

func dfs_csi(grid1, grid2 [][]int, i, j int) int {
	if i < 0 || i >= len(grid1) || j < 0 || j >= len(grid2[0]) {
		return 1
	}
	if grid2[i][j] != 1 {
		return 1
	}

	grid2[i][j] = 2 // Marcar como visitado

	return dfs_csi(grid1, grid2, i+1, j) &
		dfs_csi(grid1, grid2, i-1, j) &
		dfs_csi(grid1, grid2, i, j+1) &
		dfs_csi(grid1, grid2, i, j-1) &
		grid1[i][j]
}
