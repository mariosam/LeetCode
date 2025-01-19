/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func xorAllNums(nums1 []int, nums2 []int) int {
	xors1, xors2 := 0, 0
	for _, num := range nums1 {
		xors1 ^= num
	}
	for _, num := range nums2 {
		xors2 ^= num
	}
	return (len(nums1) % 2 * xors2) ^ (len(nums2) % 2 * xors1)
}
