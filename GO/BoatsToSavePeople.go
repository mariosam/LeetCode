/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func numRescueBoats(people []int, limit int) int {
	sort.Ints(people)
	ans := 0
	n := len(people)
	l, r := 0, n-1

	for l < r {
		if people[r]+people[l] <= limit {
			l++
		}
		r--
		ans++
	}
	if l == r {
		ans++
	}

	return ans
}
