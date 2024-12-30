/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxScoreSightseeingPair(values []int) int {
	ans, mx := 0, values[0]
	for i := 1; i < len(values); i++ {
		ans = max(ans, values[i]-i+mx)
		mx = max(mx, values[i]+i)
	}
	return ans
}
