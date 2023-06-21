/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func validateStackSequences(pushed []int, popped []int) bool {
	s, i := 0, 0

	for _, v := range popped {
		if s > 0 && pushed[s-1] == v {
			s--
			continue
		}
		if i >= len(pushed) {
			return false
		}
		for ; i < len(pushed); i++ {
			if pushed[i] == v {
				i++
				break
			}
			pushed[s] = pushed[i]
			s++
		}
	}

	return true
}
