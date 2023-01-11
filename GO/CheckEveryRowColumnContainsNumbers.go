/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func checkValid(matrix [][]int) bool {
	var arTemp []int

	//se possui apenas 1 elemento no array
	if len(matrix) == 1 {
		return true
	}

	//percorre as linhas
	for i := 0; i < len(matrix); i++ {
		for j := 0; j < len(matrix[i]); j++ {
			//se tem algum numero repetido na linha
			if containsInt(arTemp, matrix[i][j]) {
				return false
			}
			//guarda o valor temporariamente
			arTemp = append(arTemp, matrix[i][j])
		}
		arTemp = []int{}
	}

	//percorre as colunas
	for i := 0; i < len(matrix); i++ {
		for j := 0; j < len(matrix); j++ {
			//se tem algum numero repetido na coluna
			if containsInt(arTemp, matrix[j][i]) {
				return false
			}
			//guarda o valor temporariamente
			arTemp = append(arTemp, matrix[j][i])
		}
		arTemp = []int{}
	}

	return true
}

func containsInt(ar []int, val int) bool {
	for _, v := range ar {
		if v == val {
			return true
		}
	}

	return false
}
