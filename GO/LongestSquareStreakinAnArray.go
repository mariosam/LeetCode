/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"math"
	"sort"
)

func longestSquareStreak(nums []int) int {
	sort.Ints(nums)
	mapCount := make(map[int]int)
	result := -1

	for _, x := range nums {
		perfect := int(math.Sqrt(float64(x)))
		if perfect*perfect == x {
			if streak, exists := mapCount[perfect]; exists {
				mapCount[x] = streak + 1
				result = maxLSS(result, streak+1)
			} else {
				mapCount[x] = 1
			}
		} else {
			mapCount[x] = 1
		}
	}
	return result
}

func maxLSS(a, b int) int {
	if a > b {
		return a
	}
	return b
}
