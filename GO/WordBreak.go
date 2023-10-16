/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func wordBreak(s string, wordDict []string) bool {
	sLen := len(s)

	dp := make([]bool, sLen+1)
	dp[0] = true

	for i := 1; i <= sLen; i++ {
		for j := 0; j < len(wordDict); j++ {
			l := len(wordDict[j])
			if l > i {
				continue
			}

			if wordDict[j] == s[i-l:i] {
				dp[i] = (true && dp[i-l]) || dp[i]
			}
		}
	}

	return dp[sLen]
}
