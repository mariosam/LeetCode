/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func change(amount int, coins []int) int {
	dp := make([]int, amount+1)
	dp[0] = 1

	for _, c := range coins {
		for i := c; i <= amount; i++ {
			dp[i] += dp[i-c]
		}
	}
	return dp[amount]
}
