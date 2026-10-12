/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"strings"
)

func removeOuterParentheses(s string) string {
	var builder strings.Builder

	count := 1
	for i := 1; i < len(s); i++ {
		ch := s[i]
		if ch == '(' {
			count++
		} else {
			count--
		}
		if count == 0 {
			i++
			count = 1
			continue
		} else {
			builder.WriteByte(ch)
		}
	}
	return builder.String()
}
