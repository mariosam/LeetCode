/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func waysToSplitArray(nums []int) int {
	n := len(nums)

	var sum int64
	for _, num := range nums {
		sum += int64(num)
	}

	var presum int64
	res := 0
	for i := 0; i < n; i++ {
		presum += int64(nums[i])
		if i < n-1 && presum >= sum-presum {
			res++
		}
	}
	return res
}
