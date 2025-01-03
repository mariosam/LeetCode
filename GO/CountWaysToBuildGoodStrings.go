/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

const modulo = int(1e9 + 7)

func countGoodStrings(low int, high int, zero int, one int) int {
	dp := make([]int, high+1)
	dp[0] = 1

	for end := 1; end <= high; end++ {
		if end >= zero {
			dp[end] += dp[end-zero]
		}
		if end >= one {
			dp[end] += dp[end-one]
		}
		dp[end] %= modulo
	}

	result := int(0)
	for i := low; i <= high; i++ {
		result += dp[i]
		result %= modulo
	}

	return result
}
