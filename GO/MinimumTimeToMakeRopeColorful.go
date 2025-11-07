/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minCost2(colors string, neededTime []int) int {
	ans := 0
	maxNeededTime := neededTime[0]

	for i := 1; i < len(colors); i++ {
		if colors[i] == colors[i-1] {
			if maxNeededTime < neededTime[i] {
				ans += maxNeededTime
				maxNeededTime = neededTime[i]
			} else {
				ans += neededTime[i]
			}
		} else {
			maxNeededTime = neededTime[i]
		}
	}

	return ans
}
