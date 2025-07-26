/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maximumUniqueSubarray(nums []int) int {
	l, r := 0, 0
	cnt := map[int]int{}
	ans := 0
	sum := 0

	for r < len(nums) {
		in := nums[r]
		sum += in
		r++
		cnt[in]++
		for cnt[in] > 1 {
			out := nums[l]
			l++
			sum -= out
			cnt[out]--
		}
		ans = max(ans, sum)
	}
	return ans
}
