/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func peopleAwareOfSecret(n int, delay int, forget int) int {
	mod := 1000000007
	dp := make([]int, n+1)
	dp[1] = 1

	for i := 1; i <= n; i++ {
		for j := i + delay; j < i+forget && j <= n; j++ {
			dp[j] = (dp[j] + dp[i]) % mod
		}
	}

	res := 0
	for i := n - forget + 1; i <= n; i++ {
		res = (res + dp[i]) % mod
	}

	return res
}
