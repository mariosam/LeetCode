/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minSwaps(s string) int {
	unmatched := 0

	for _, c := range s {
		if c == '[' {
			unmatched++
		} else if unmatched > 0 {
			// c == ']' and there's a match
			unmatched--
		}
	}

	return (unmatched + 1) / 2
}
