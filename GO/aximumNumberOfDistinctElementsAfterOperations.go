/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func maxDistinctElements(nums []int, k int) int {
	sort.Ints(nums)
	ans := 0
	pre := -1 << 31 // equivalent to Integer.MIN_VALUE

	for _, x := range nums {
		cur := minDE(x+k, maxDE(x-k, pre+1))
		if cur > pre {
			ans++
			pre = cur
		}
	}
	return ans
}

func minDE(a, b int) int {
	if a < b {
		return a
	}
	return b
}

func maxDE(a, b int) int {
	if a > b {
		return a
	}
	return b
}
