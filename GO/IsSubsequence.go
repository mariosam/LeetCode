/**
 * @version GO 1.21.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func isSubsequence(s string, t string) bool {
	sIdx := 0
	tIdx := 0

	for sIdx < len(s) && tIdx < len(t) {
		if s[sIdx] == t[tIdx] {
			sIdx++
		}
		tIdx++
	}

	return sIdx == len(s)
}
