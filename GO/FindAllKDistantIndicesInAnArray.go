/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"math"
	"sort"
)

func findKDistantIndices(nums []int, key int, k int) []int {
	var ans []int
	var keyIndices []int

	for i, v := range nums {
		if v == key {
			keyIndices = append(keyIndices, i)
		}
	}

	for i := 0; i < len(nums); i++ {
		for _, idx := range keyIndices {
			if int(math.Abs(float64(i-idx))) <= k {
				ans = append(ans, i)
				break
			}
		}
	}

	sort.Ints(ans)
	return ans
}
