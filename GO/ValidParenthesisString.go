/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func checkValidString(s string) bool {
	lo, hi := 0, 0
	for _, c := range s {
		if c == '(' {
			lo++
			hi++
		} else if c == ')' {
			lo--
			hi--
		} else {
			lo--
			hi++
		}
		if hi < 0 {
			break
		}
		lo = max(lo, 0)
	}
	return lo == 0
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}
