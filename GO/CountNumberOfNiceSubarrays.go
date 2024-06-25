/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numberOfSubarrays(nums []int, k int) int {
	n := len(nums)
	s := make([]int, n+1)
	cnt := make([]int, n+1)
	ans := 0

	cnt[s[0]]++
	for i := 1; i <= n; i++ {
		s[i] = s[i-1] + nums[i-1]%2
		cnt[s[i]]++
	}

	for i := 1; i <= n; i++ {
		if s[i] >= k {
			ans += cnt[s[i]-k]
		}
	}

	return ans
}
