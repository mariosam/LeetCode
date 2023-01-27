/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func diagonalSum(mat [][]int) int {
	//se possui apenas 1 elemento no array
	if len(mat) == 1 {
		return mat[0][0]
	}

	sum := 0
	//percorre diagonal: iniciando top left to low right
	for i := 0; i < len(mat); i++ {
		sum = sum + mat[i][i]
	}

	//percorre diagonal: iniciando low left to top right
	j := 0
	for i := len(mat) - 1; i >= 0; i-- {
		if i != j {
			sum = sum + mat[i][j]
		}
		j++
	}

	return sum
}
