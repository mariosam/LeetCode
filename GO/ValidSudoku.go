/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func isValidSudoku(board [][]byte) bool {
	//verifica se as linhas sao validas
	check := isValidSequence(0, 0, 9, 9, "lin", board)
	if !check {
		return false
	}

	//verifica se as colunas sao validas
	check = isValidSequence(0, 0, 9, 9, "col", board)
	if !check {
		return false
	}

	//verifica se o quadrante 1 eh valido
	check = isValidSequence(0, 0, 3, 3, "", board)
	if !check {
		return false
	}

	//verifica se o quadrante 2 eh valido
	check = isValidSequence(0, 3, 3, 3, "", board)
	if !check {
		return false
	}

	//verifica se o quadrante 3 eh valido
	check = isValidSequence(0, 6, 3, 3, "", board)
	if !check {
		return false
	}

	//verifica se o quadrante 4 eh valido
	check = isValidSequence(3, 0, 3, 3, "", board)
	if !check {
		return false
	}

	//verifica se o quadrante 5 eh valido
	check = isValidSequence(3, 3, 3, 3, "", board)
	if !check {
		return false
	}

	//verifica se o quadrante 6 eh valido
	check = isValidSequence(3, 6, 3, 3, "", board)
	if !check {
		return false
	}

	//verifica se o quadrante 7 eh valido
	check = isValidSequence(6, 0, 3, 3, "", board)
	if !check {
		return false
	}

	//verifica se o quadrante 8 eh valido
	check = isValidSequence(6, 3, 3, 3, "", board)
	if !check {
		return false
	}

	//verifica se o quadrante 9 eh valido
	return isValidSequence(6, 6, 3, 3, "", board)
}

/**
 * @param {int} iniI de onde inicia a contagem de linha
 * @param {int} iniJ de onde inicia a cnotagem de coluna
 * @param {int} x onde encerra a contagem de linha
 * @param {int} y onde encerra a contagem de coluna
 * @param {String} quadros como o array deve ser percorrido
 * @param {character[][]} board $board contem os dados a serem analisados
 * @return {boolean}
 */
func isValidSequence(iniI int, iniJ int, x int, y int, quadros string, board [][]byte) bool {
	var arTemp []byte
	var numero byte = '.'
	x = x + iniI
	y = y + iniJ

	//percorre o quadro
	for i := iniI; i < x; i++ {
		for j := iniJ; j < y; j++ {
			//valor do quadradinho
			if quadros == "col" {
				numero = board[j][i]
			} else {
				numero = board[i][j]
			}
			//ignora os espacos vazios '.'
			if numero == '.' {
				continue
			}
			//se o valor ja foi lido antes, sudoku invalido
			if contains(arTemp, numero) {
				return false
			}
			//guarda o valor temporariamente
			arTemp = append(arTemp, numero)
		}
		if quadros != "" {
			arTemp = []byte{}
		}
	}
	return true
}

func contains(ar []byte, val byte) bool {
	for _, v := range ar {
		if v == val {
			return true
		}
	}

	return false
}
