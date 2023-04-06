/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func maxSatisfaction(satisfaction []int) int {
	sort.Ints(satisfaction)
	var sum int
	var res int

	for i := len(satisfaction) - 1; i >= 0; i-- {
		if satisfaction[i]+res+sum > res {
			res = satisfaction[i] + res + sum
			sum += satisfaction[i]
		}
	}

	return res
}
