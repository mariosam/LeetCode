/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numEquivDominoPairs(dominoes [][]int) int {
	cnt := make([]int, 100)
	res := 0
	for _, v := range dominoes {
		k := minEq(v[0], v[1])*10 + maxEq(v[0], v[1])
		res += cnt[k]
		cnt[k]++
	}
	return res
}

func minEq(a, b int) int {
	if a < b {
		return a
	}
	return b
}

func maxEq(a, b int) int {
	if a > b {
		return a
	}
	return b
}
