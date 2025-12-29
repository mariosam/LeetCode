/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func maximumHappinessSum(happiness []int, k int) int64 {
	sort.Ints(happiness)
	n := len(happiness)
	var ans int64 = 0

	for i := 0; i < k; i++ {
		x := happiness[n-i-1] - i
		if x > 0 {
			ans += int64(x)
		}
	}
	return ans
}
