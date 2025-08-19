/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func maximum69Number(num int) int {
	numCopy := num
	indexSix := -1
	currDigit := 0

	for numCopy > 0 {
		if numCopy%10 == 6 {
			indexSix = currDigit
		}
		numCopy /= 10
		currDigit++
	}

	if indexSix == -1 {
		return num
	}
	return num + 3*int(math.Pow(10, float64(indexSix)))
}
