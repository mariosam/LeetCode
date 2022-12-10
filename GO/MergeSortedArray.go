/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func merge(nums1 []int, m int, nums2 []int, n int) []int {
	j := 0
	for i := m; i < len(nums1); i++ {
		nums1[i] = nums2[j]
		j++
	}

	sort.Ints(nums1)

	if m == 0 {
		nums1 = nums2
	}

	return nums1 //comentar essa linha no leetcode pq o return eh void.
}
