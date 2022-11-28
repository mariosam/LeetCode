/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

var ROMAN = map[string]int{"I": 1, "V": 5, "X": 10, "L": 50, "C": 100, "D": 500, "M": 1000}

func romanToInt(s string) int {
	soma := 0

	for i := 0; i < len(s); i++ {
		if i+1 < len(s) && ROMAN[string(s[i])] < ROMAN[string(s[i+1])] {
			soma = soma + (ROMAN[string(s[i+1])] - ROMAN[string(s[i])])

			i++
		} else {
			soma += ROMAN[string(s[i])]
		}
	}

	return soma
}
