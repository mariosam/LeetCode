/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math/bits"

func makeTheIntegerZero(num1 int, num2 int) int {
	for ops := 0; ops <= 60; ops++ {
		target := num1 - ops*num2
		if target < 0 {
			continue
		}
		bitCount := bits.OnesCount(uint(target))

		if bitCount <= ops && ops <= target {
			return ops
		}
	}
	return -1
}
