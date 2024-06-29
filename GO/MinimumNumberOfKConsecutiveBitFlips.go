/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minKBitFlips(nums []int, k int) int {
	n := len(nums)
	d := make([]int, n+1)
	ans, s := 0, 0
	for i, x := range nums {
		s += d[i]
		if s%2 == x%2 {
			if i+k > n {
				return -1
			}
			d[i]++
			d[i+k]--
			s++
			ans++
		}
	}
	return ans
}
