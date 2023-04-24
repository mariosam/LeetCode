/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

func isIsomorphic(s string, t string) bool {
	for i := 0; i < len(s); i++ {
		if strings.Index(s, string(s[i])) != strings.Index(t, string(t[i])) {
			return false
		}
	}

	return true
}
