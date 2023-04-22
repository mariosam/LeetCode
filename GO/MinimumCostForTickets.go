/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func mincostTickets(days []int, costs []int) int {
	nDays := days[len(days)-1]
	dp := make([]int, nDays+31)
	dMap := make(map[int]bool)

	for i := range days {
		dMap[days[i]] = true
	}

	for i := nDays; i > 0; i-- {
		if dMap[i] {
			dp[i] = min_tri(dp[i+1]+costs[0], dp[i+7]+costs[1], dp[i+30]+costs[2])
		} else {
			dp[i] = dp[i+1]
		}
	}

	return dp[1]
}

func min_tri(a, b, c int) int {
	if a > b {
		a = b
	}
	if a > c {
		a = c
	}
	return a
}
