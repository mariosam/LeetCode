/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

func lengthOfLastWord(s string) int {
	//remove os espacos em branco
	s = strings.TrimSpace(s)
	//inicializa retorno
	result := 0

	//percorre a frase de tras pra frente
	for i := len(s) - 1; i > -1; i-- {
		//quando encontrar um espaco em branco interrompe
		if s[i] == ' ' {
			break
		}
		result++
	}

	return result
}
