/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func findNumbers(nums []int) int {
	sort.Ints(nums)
	cnt := 0
	base := 10
	flag := false
	for _, n := range nums {
		for n >= base {
			base *= 10
			flag = !flag
		}
		if flag {
			cnt++
		}
	}
	return cnt
}
