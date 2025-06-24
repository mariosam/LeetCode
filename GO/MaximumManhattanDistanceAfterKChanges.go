/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxDistanceK(s string, k int) int {
	ans := 0
	x, y := 0, 0

	for i := 0; i < len(s); i++ {
		dir := s[i]
		if dir == 'N' {
			y++
		} else if dir == 'S' {
			y--
		} else if dir == 'E' {
			x++
		} else { // 'W'
			x--
		}

		manhattan := absDist(x) + absDist(y) + k*2
		if minDist(manhattan, i+1) > ans {
			ans = minDist(manhattan, i+1)
		}
	}

	return ans
}

func absDist(a int) int {
	if a < 0 {
		return -a
	}
	return a
}

func minDist(a, b int) int {
	if a < b {
		return a
	}
	return b
}
