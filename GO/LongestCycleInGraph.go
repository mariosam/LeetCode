/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func longestCycle(edges []int) int {
	n := len(edges)
	times := make([]int, n)
	visited := func(i int) bool {
		return times[i] > 0
	}
	t := 1
	res := -1
	for i := range edges {
		t0 := t
		if visited(i) {
			continue
		}
		times[i] = t
		t++
		// Iterate until end or reaching a previously visited node
		first, second := i, edges[i]
		for second != -1 && !visited(second) {
			times[second] = t
			first = second
			second = edges[second]
			t++
		}
		if second != -1 && times[second] >= t0 {
			res = max(res, times[first]-times[second]+1)
		}
	}
	return res
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}
