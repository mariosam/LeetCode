/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func maxRunTime(n int, batteries []int) int64 {
	sort.Slice(batteries, func(i, j int) bool {
		return batteries[i] > batteries[j]
	})
	sum := 0
	for i := 0; i < len(batteries); i++ {
		sum = sum + batteries[i]
	}
	for i := 0; i < len(batteries); i++ {
		if batteries[i] <= sum/n {
			return int64(sum / n)
		}
		sum = sum - batteries[i]
		n--
	}
	return 0
}
