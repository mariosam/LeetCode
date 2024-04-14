/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func timeRequiredToBuy(tickets []int, k int) int {
	ans := 0
	for i := 0; i < len(tickets); i++ {
		if i <= k {
			ans += minTime(tickets[k], tickets[i])
		} else {
			ans += minTime(tickets[k]-1, tickets[i])
		}
	}
	return ans
}

func minTime(a, b int) int {
	if a < b {
		return a
	}
	return b
}
