/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minDeletionSize(strs []string) int {
	n := len(strs[0])
	f := make([]int, n)
	for i := range f {
		f[i] = 1
	}

	for i := 1; i < n; i++ {
		for j := 0; j < i; j++ {
			ok := true
			for _, s := range strs {
				if s[j] > s[i] {
					ok = false
					break
				}
			}
			if ok && f[j]+1 > f[i] {
				f[i] = f[j] + 1
			}
		}
	}

	maxF := 0
	for _, v := range f {
		if v > maxF {
			maxF = v
		}
	}
	return n - maxF
}
