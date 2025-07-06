/**
 * @version GO 1.233.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math/bits"

func kthCharacter(k int) byte {
	return byte('a' + bits.OnesCount(uint(k-1)))
}
