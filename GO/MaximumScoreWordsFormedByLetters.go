/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxScoreWords(words []string, letters []byte, score []int) int {
	cnt := make([]int, 26)
	for _, letter := range letters {
		cnt[letter-'a']++
	}
	n := len(words)
	ans := 0

	for i := 0; i < (1 << n); i++ {
		cur := make([]int, 26)
		for j := 0; j < n; j++ {
			if (i>>j)&1 == 1 {
				for k := 0; k < len(words[j]); k++ {
					cur[words[j][k]-'a']++
				}
			}
		}
		ok := true
		t := 0
		for j := 0; j < 26; j++ {
			if cur[j] > cnt[j] {
				ok = false
				break
			}
			t += cur[j] * score[j]
		}
		if ok && ans < t {
			ans = t
		}
	}

	return ans
}
