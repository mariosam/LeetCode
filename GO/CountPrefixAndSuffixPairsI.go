/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

func countPrefixSuffixPairs(words []string) int {
	count := 0
	n := len(words)
	for i := 0; i < n-1; i++ {
		for j := i + 1; j < n; j++ {
			if strings.HasPrefix(words[j], words[i]) && strings.HasSuffix(words[j], words[i]) {
				count++
			}
		}
	}
	return count
}
