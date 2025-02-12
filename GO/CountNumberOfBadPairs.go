/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countBadPairs(nums []int) int64 {
	n := int64(len(nums))
	ans := int64(0)
	counter := make(map[int]int64)

	for i := len(nums) - 1; i >= 0; i-- {
		diff := nums[i] - i
		if val, exists := counter[diff]; exists {
			ans += val
		}
		counter[diff]++
	}
	return (n*(n-1))/2 - ans
}
