/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"slices"
	"sort"
)

func minimumSize(nums []int, maxOperations int) int {
	r := slices.Max(nums)
	return 1 + sort.Search(r, func(mx int) bool {
		mx++
		cnt := 0
		for _, x := range nums {
			cnt += (x - 1) / mx
		}
		return cnt <= maxOperations
	})
}
