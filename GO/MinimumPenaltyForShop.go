/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func bestClosingTime(customers string) int {
	n := len(customers)
	s := make([]int, n+1)
	for i := 0; i < n; i++ {
		if customers[i] == 'Y' {
			s[i+1] = s[i] + 1
		} else {
			s[i+1] = s[i]
		}
	}
	ans := 0
	cost := 1 << 30
	for j := 0; j <= n; j++ {
		t := j - s[j] + s[n] - s[j]
		if cost > t {
			ans = j
			cost = t
		}
	}
	return ans
}
