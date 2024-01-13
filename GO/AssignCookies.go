/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func findContentChildren(g []int, s []int) int {
	if len(g) == 0 || len(s) == 0 {
		return 0
	}

	sort.Ints(g)
	sort.Ints(s)

	j := -1
	for i := 0; i < len(g); i++ {
		for {
			j++
			if j >= len(s) {
				return i
			}
			if s[j] >= g[i] {
				break
			}
		}
	}

	return len(g)
}
