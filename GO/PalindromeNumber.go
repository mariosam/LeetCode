/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"reflect"
)

func isPalindrome(x int) bool {
	//se for negativo
	if x < 0 {
		return false
	}

	//transforma o numero em um array
	ori := splitInt(x)
	cop := splitInt(x)

	//inverte o array copia
	for i, j := 0, len(cop)-1; i < j; i, j = i+1, j-1 {
		cop[i], cop[j] = cop[j], cop[i]
	}

	//compara o original com a copia invertida
	return reflect.DeepEqual(ori, cop)
}

// split integer into slice of single digits
func splitInt(n int) []int {
	slc := []int{}
	for n > 0 {
		slc = append(slc, n%10)
		n = n / 10
	}
	return slc
}
