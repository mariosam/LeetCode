/**
 * @version GO 1.21.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numberOfMatches(n int) int {
	var cnt int

	for n != 1 {
		cnt += n >> 1
		if n&1 != 0 {
			n += 1
		}
		n = n >> 1
	}

	return cnt
}
