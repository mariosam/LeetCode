/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func getCommon(nums1 []int, nums2 []int) int {
	m, n := len(nums1), len(nums2)
	for i, j := 0, 0; i < m && j < n; {
		if nums1[i] == nums2[j] {
			return nums1[i]
		}
		if nums1[i] < nums2[j] {
			i++
		} else {
			j++
		}
	}
	return -1
}
