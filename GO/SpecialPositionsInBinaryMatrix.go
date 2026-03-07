/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numSpecial(mat [][]int) int {
	m := len(mat)
	n := len(mat[0])
	ans := 0

	rowOnes := make([]int, m)
	colOnes := make([]int, n)

	for i := 0; i < m; i++ {
		for j := 0; j < n; j++ {
			if mat[i][j] == 1 {
				rowOnes[i]++
				colOnes[j]++
			}
		}
	}

	for i := 0; i < m; i++ {
		for j := 0; j < n; j++ {
			if mat[i][j] == 1 && rowOnes[i] == 1 && colOnes[j] == 1 {
				ans++
			}
		}
	}

	return ans
}
