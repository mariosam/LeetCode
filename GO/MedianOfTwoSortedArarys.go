/**
 * @version GO 1.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func findMedianSortedArrays(nums1 []int, nums2 []int) float64 {
	ar := append(nums1, nums2...)
	sort.Ints(ar)

	if len(ar)%2 == 0 {
		return float64((ar[len(ar)/2] + ar[(len(ar)/2)-1])) / 2
	}

	return float64(ar[(len(ar)-1)/2])
}
