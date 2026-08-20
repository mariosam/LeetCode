/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func longestSubsequenceXOR(nums []int) int {
	xor := 0

	cnt0 := 0
	n := len(nums)
	for _, x := range nums {
		xor ^= x
		if x == 0 {
			cnt0++
		}
	}
	if xor != 0 {
		return n
	}
	if cnt0 == n {
		return 0
	}
	return n - 1
}
