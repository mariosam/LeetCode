/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math/bits"

func findComplement(num int) int {
	bitLength := bits.Len(uint(num))
	mask := (1 << bitLength) - 1
	return num ^ mask
}
