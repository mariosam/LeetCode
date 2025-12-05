/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countTrapezoids(points [][]int) int {
	mod := int(1e9 + 7)
	cnt := make(map[int]int)

	for _, p := range points {
		y := p[1]
		cnt[y]++
	}

	ans := int64(0)
	s := int64(0)

	for _, v := range cnt {
		t := int64(v) * int64(v-1) / 2
		ans = (ans + (s * t % int64(mod))) % int64(mod)
		s += t
	}

	return int(ans)
}
