/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func maximizeSquareHoleArea(n int, m int, hBars []int, vBars []int) int {
	sort.Ints(hBars)
	sort.Ints(vBars)
	a, b := 1, 1

	pre, cur := 1, 1
	for _, x := range hBars {
		if x-1 == pre {
			cur++
		} else {
			cur = 2
		}
		pre = x
		a = max(a, cur)
	}

	pre, cur = 1, 1
	for _, x := range vBars {
		if x-1 == pre {
			cur++
		} else {
			cur = 2
		}
		pre = x
		b = max(b, cur)
	}

	return min(a, b) * min(a, b)
}
