/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

func addSpaces(s string, spaces []int) string {
	var result strings.Builder
	j := 0

	for i, c := range s {
		if j < len(spaces) && i == spaces[j] {
			result.WriteByte(' ')
			j++
		}
		result.WriteRune(c)
	}

	return result.String()
}
