/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func countCoveredBuildings(n int, buildings [][]int) int {
	g1 := make(map[int][]int)
	g2 := make(map[int][]int)

	for _, b := range buildings {
		x, y := b[0], b[1]
		g1[x] = append(g1[x], y)
		g2[y] = append(g2[y], x)
	}

	for k := range g1 {
		sort.Ints(g1[k])
	}
	for k := range g2 {
		sort.Ints(g2[k])
	}

	ans := 0
	for _, b := range buildings {
		x, y := b[0], b[1]
		l1 := g1[x]
		l2 := g2[y]

		if l2[0] < x && x < l2[len(l2)-1] &&
			l1[0] < y && y < l1[len(l1)-1] {
			ans++
		}
	}

	return ans
}
