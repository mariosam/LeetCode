/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func getWordsInLongestSubsequence(words []string, groups []int) []string {
	n := len(words)
	dp := make([]int, n)
	arr := make([]int, n)
	for i := range dp {
		dp[i] = 1
	}
	idx := 0

	for i := n - 1; i >= 0; i-- {
		s := words[i]
		for j := i + 1; j < n; j++ {
			if groups[i] == groups[j] || len(s) != len(words[j]) {
				continue
			}
			t := words[j]
			diff := 0
			for k := 0; k < len(s); k++ {
				if s[k] != t[k] {
					diff++
					if diff > 1 {
						break
					}
				}
			}
			if diff != 1 {
				continue
			}
			next := dp[j] + 1
			if next > dp[i] {
				dp[i] = next
				arr[i] = j
			}
			if next > dp[idx] {
				idx = i
			}
		}
	}

	res := []string{words[idx]}
	i := idx
	for dp[i] > 1 {
		i = arr[i]
		res = append(res, words[i])
	}
	return res
}
