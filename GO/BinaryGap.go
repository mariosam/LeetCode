/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func binaryGap(n int) int {
	maxlen := 0
	len := 0
	foundOne := false

	for n > 0 {
		val := n & 1
		n >>= 1

		if val == 1 {
			if foundOne {
				if len > maxlen {
					maxlen = len
				}
			}
			len = 1
			foundOne = true
		} else if foundOne {
			len++
		}
	}

	return maxlen
}
