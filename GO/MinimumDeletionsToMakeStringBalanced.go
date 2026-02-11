/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minimumDeletions(s string) int {
	n := len(s)
	rightA := 0

	for i := 0; i < n; i++ {
		if s[i] == 'a' {
			rightA++
		}
	}

	leftB := 0
	res := rightA

	for i := 0; i < n; i++ {
		if s[i] == 'a' {
			rightA--
		} else {
			leftB++
		}
		if leftB+rightA < res {
			res = leftB + rightA
		}
	}

	return res
}
