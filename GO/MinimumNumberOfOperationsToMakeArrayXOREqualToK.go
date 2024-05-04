/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math/bits"

func minOperations(nums []int, k int) int {
	for _, x := range nums {
		k ^= x
	}
	return bits.OnesCount(uint(k))
}
