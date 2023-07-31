/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func getAverages(nums []int, k int) []int {
	n := len(nums)
	s := make([]int64, n+1)
	for i := 0; i < n; i++ {
		s[i+1] = s[i] + int64(nums[i])
	}

	ans := make([]int, n)
	for i := 0; i < n; i++ {
		ans[i] = -1
	}

	for i := 0; i < n; i++ {
		if i-k >= 0 && i+k < n {
			ans[i] = int((s[i+k+1] - s[i-k]) / int64((k<<1)|1))
		}
	}

	return ans
}
