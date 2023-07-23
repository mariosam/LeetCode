/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func largestAltitude(gain []int) int {
	res := 0
	cur := 0

	for _, g := range gain {
		cur += g
		if cur > res {
			res = cur
		}
	}

	return res
}
