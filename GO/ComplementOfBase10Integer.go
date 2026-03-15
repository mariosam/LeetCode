/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func bitwiseComplement(n int) int {
	lo, hi := 1, 31 // TODO
	for lo < hi {
		mid := int(uint(lo+hi) >> 1)
		numCur := 1 << mid
		if numCur <= n {
			lo = mid + 1
		} else {
			hi = mid
		}
	}
	return 1<<hi - 1 ^ n
}
