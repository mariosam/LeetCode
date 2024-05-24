/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func subsetXORSum(nums []int) int {
	n := len(nums)
	ans := 0

	for i := 0; i < (1 << n); i++ {
		s := 0
		for j := 0; j < n; j++ {
			if (i>>j)&1 == 1 {
				s ^= nums[j]
			}
		}
		ans += s
	}

	return ans
}
