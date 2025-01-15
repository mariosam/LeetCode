/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func canBeValid(s string, locked string) bool {
	if len(s)%2 != 0 {
		return false
	}

	total, open, closed := 0, 0, 0
	for i := len(s) - 1; i >= 0; i-- {
		if locked[i] == '0' {
			total++
		} else if s[i] == '(' {
			open++
		} else if s[i] == ')' {
			closed++
		}
		if total-open+closed < 0 {
			return false
		}
	}

	total, open, closed = 0, 0, 0
	for i := 0; i < len(s); i++ {
		if locked[i] == '0' {
			total++
		} else if s[i] == '(' {
			open++
		} else if s[i] == ')' {
			closed++
		}
		if total+open-closed < 0 {
			return false
		}
	}

	return true
}
