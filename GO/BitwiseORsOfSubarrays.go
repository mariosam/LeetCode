/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func subarrayBitwiseORs(arr []int) int {
	cur := make([]int, 33)
	next := make([]int, 33)
	n1 := 0
	set := make(map[int]bool)

	for _, a := range arr {
		n2 := 0
		next[n2] = a
		n2++
		set[a] = true
		a2 := a

		for i := 0; i < n1; i++ {
			a2 = a | cur[i]
			if a2 != a {
				a = a2
				next[n2] = a
				n2++
				set[a] = true
			}
		}

		// Swap cur and next
		copy(cur, next)
		n1 = n2
	}

	return len(set)
}
