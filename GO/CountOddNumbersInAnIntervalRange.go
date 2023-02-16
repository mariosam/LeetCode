/**
 * @version GO 1.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func countOdds(low int, high int) int {
	var diff float64 = float64(high - low)
	diff = diff + 1
	diff = diff / 2

	if low%2 == 0 {
		diff = math.Floor(diff)
	} else {
		diff = math.Ceil(diff)
	}

	return int(diff)
}
