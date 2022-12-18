/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"reflect"
	"regexp"
	"strings"
)

func isPalindromeString(s string) bool {
	s = strings.ToLower(regexp.MustCompile(`([^a-zA-Z0-9]|\\s)+`).ReplaceAllString(s, ""))

	//transforma em array
	ori := strings.Split(s, "")
	cop := strings.Split(s, "")

	//inverte o array copia
	for i, j := 0, len(cop)-1; i < j; i, j = i+1, j-1 {
		cop[i], cop[j] = cop[j], cop[i]
	}

	//compara o original com a copia invertida
	return reflect.DeepEqual(ori, cop)
}
