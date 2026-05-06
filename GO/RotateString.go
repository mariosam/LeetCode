/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

func rotateString(s string, goal string) bool {
	if len(s) != len(goal) {

		return false
	}
	str := s + s
	return strings.Contains(str, goal)
}
