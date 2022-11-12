/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"strings"
)

func lengthOfLongestSubstring(s string) int {
	result := 0
	ciclos := 0
	arr := make([]string, 0, len(s))

	for i := 0; i < len(s); i++ {
		//verifica se esse char ja existe no substring analisado.
		if strings.Contains(strings.Join(arr, ""), string(s[i])) {
			//if slices.Contains(arr, string(s[i])) {
			//reinicia o array com nova sequencia de substring.
			arr = make([]string, 0, len(s))

			//reiniciar o looping pelo primeiro char da sequencia.
			if len(s) > ciclos {
				i = ciclos
				ciclos++
			}
		}
		//junta na substring do array.
		arr = append(arr, string(s[i]))

		//verifica maior contagem.
		if len(arr) > result {
			result = len(arr)

			//tamanho maximo alcancado
			if len(arr) == 98 {
				break
			}
		}
	}

	return result
}
