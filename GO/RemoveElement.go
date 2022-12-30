/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func removeElement(nums []int, val int) int {
	total := 0

	for i := 0; i < len(nums); i++ {
		if nums[i] != val {
			total++
		} else {
			nums[i] = '_'
		}
	}
	sort.Ints(nums)

	return total
}
