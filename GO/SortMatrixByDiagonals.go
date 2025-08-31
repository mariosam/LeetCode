/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func sortMatrix(grid [][]int) [][]int {
	n := len(grid)

	// Bottom-left diagonals
	for k := n - 2; k >= 0; k-- {
		i, j := k, 0
		var t []int
		for i < n && j < n {
			t = append(t, grid[i][j])
			i++
			j++
		}
		sort.Ints(t)
		for _, x := range t {
			i--
			j--
			grid[i][j] = x
		}
	}

	// Top-right diagonals
	for k := n - 2; k > 0; k-- {
		i, j := k, n-1
		var t []int
		for i >= 0 && j >= 0 {
			t = append(t, grid[i][j])
			i--
			j--
		}
		sort.Ints(t)
		for _, x := range t {
			i++
			j++
			grid[i][j] = x
		}
	}

	return grid
}
