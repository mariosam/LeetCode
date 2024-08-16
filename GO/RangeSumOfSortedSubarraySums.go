/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func rangeSum(nums []int, n int, left int, right int) int {
	arr := []int{}
	mod := int(1e9 + 7)

	for i := 0; i < len(nums); i++ {
		arr = append(arr, nums[i])
		last := nums[i]
		for j := i + 1; j < len(nums); j++ {
			arr = append(arr, last+nums[j])
			last = arr[len(arr)-1]
		}
	}

	sort.Ints(arr)
	sum := 0

	for i := left - 1; i <= right-1; i++ {
		sum = (sum + arr[i]) % mod
	}

	return sum
}
