/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findMissingElements(nums []int) []int {
	list := make([]int, 0)

	ans := make([]int, 0)
	minVal := nums[0]
	maxVal := nums[0]
	for _, num := range nums {
		if num < minVal {
			minVal = num
		}
		if num > maxVal {
			maxVal = num
		}
	}
	for i := minVal; i < maxVal; i++ {
		list = append(list, i)
	}
	for _, e := range list {
		found := false
		for _, num := range nums {
			if e == num {
				found = true
				break
			}
		}
		if !found {
			ans = append(ans, e)
		}
	}
	return ans
}
