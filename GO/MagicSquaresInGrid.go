/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numMagicSquaresInside(grid [][]int) int {
	if grid == nil || len(grid) < 3 || len(grid[0]) < 3 {
		return 0
	}
	R, C := len(grid), len(grid[0])
	count := 0
	for r := 0; r <= R-3; r++ {
		for c := 0; c <= C-3; c++ {
			if grid[r+1][c+1] == 5 && isMagic(grid, r, c) {
				count++
			}
		}
	}
	return count
}

func isMagic(grid [][]int, r, c int) bool {
	counts := make([]int, 9)
	for i := 0; i < 3; i++ {
		rSum, cSum := 0, 0
		for j := 0; j < 3; j++ {
			rSum += grid[r+i][c+j]
			cSum += grid[r+j][c+i]
			t := grid[r+i][c+j]
			if t > 9 || t < 1 || counts[t-1] > 0 {
				return false
			}
			counts[t-1]++
		}
		if rSum != 15 || cSum != 15 {
			return false
		}
	}
	return true
}
