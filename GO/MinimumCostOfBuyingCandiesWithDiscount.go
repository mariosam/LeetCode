/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func minimumCostWithDiscount(cost []int) int {
	sort.Ints(cost)

	ans := 0
	for i := len(cost) - 1; i >= 0; i-- {
		ans += cost[i]
		i--
		if i >= 0 {
			ans += cost[i]
		}
		i--
	}
	return ans
}
