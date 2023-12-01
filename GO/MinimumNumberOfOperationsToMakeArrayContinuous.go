/**
 * @version GO 1.21.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func minOperations(nums []int) int {
	sort.Ints(nums)
	n := len(nums)
	m := 1
	for i := 1; i < n; i++ {
		if nums[i] != nums[i-1] {
			nums[m] = nums[i]
			m++
		}
	}
	ans := n
	for i, j := 0, 0; i < m; i++ {
		for j < m && nums[j]-nums[i] <= n-1 {
			j++
		}
		ans = minOp(ans, n-(j-i))
	}
	return ans
}

func minOp(a, b int) int {
	if a < b {
		return a
	}
	return b
}
