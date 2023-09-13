/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minExtraChar(s string, dictionary []string) int {
	ss := make(map[string]bool)
	for _, w := range dictionary {
		ss[w] = true
	}
	n := len(s)
	f := make([]int, n+1)
	f[0] = 0
	for i := 1; i <= n; i++ {
		f[i] = f[i-1] + 1
		for j := 0; j < i; j++ {
			if ss[s[j:i]] {
				f[i] = minCheck(f[i], f[j])
			}
		}
	}
	return f[n]
}

func minCheck(a, b int) int {
	if a < b {
		return a
	}
	return b
}
