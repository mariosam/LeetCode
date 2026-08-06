/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func minimumPushesII(word string) int {
	cnt := make([]int, 26)

	for _, c := range word {
		cnt[c-'a']++
	}
	sort.Ints(cnt)
	ans := 0
	for i := 0; i < 26; i++ {
		ans += (i/8 + 1) * cnt[25-i]
	}
	return ans
}
