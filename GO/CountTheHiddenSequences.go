/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numberOfArrays(differences []int, lower int, upper int) int {
	x := 0
	mi := 0
	mx := 0

	for _, d := range differences {
		x += d
		if x < mi {
			mi = x
		}
		if x > mx {
			mx = x
		}
	}

	res := upper - lower - (mx - mi) + 1
	if res < 0 {
		return 0
	}
	return res
}
