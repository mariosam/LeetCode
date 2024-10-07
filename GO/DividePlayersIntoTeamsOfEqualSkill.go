/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func dividePlayers(skill []int) int64 {
	s := 0
	for _, v := range skill {
		s += v
	}
	m := len(skill) / 2
	if s%m != 0 {
		return -1
	}

	t := s / m
	d := make([]int, 1010)
	var ans int64 = 0

	for _, v := range skill {
		if d[t-v] > 0 {
			ans += int64(v * (t - v))
			d[t-v]--
			m--
		} else {
			d[v]++
		}
	}

	if m == 0 {
		return ans
	} else {
		return -1
	}
}
