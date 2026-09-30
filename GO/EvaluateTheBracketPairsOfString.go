/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

func evaluate(s string, knowledge [][]string) string {
	if len(s) == 1 {
		return s
	}
	mp := make(map[string]string)

	for _, info := range knowledge {
		key := info[0]
		value := info[1]
		mp[key] = value
	}
	var sb strings.Builder

	for i := 0; i < len(s); {
		current := s[i]

		if current == ')' {
			i++
			continue
		} else if current != '(' {
			sb.WriteByte(current)
			i++
		} else {
			var key strings.Builder
			i++
			for s[i] != ')' {
				key.WriteByte(s[i])
				i++
			}

			if value, ok := mp[key.String()]; ok {
				sb.WriteString(value)
			} else {
				sb.WriteByte('?')
			}
		}
	}
	return sb.String()
}
