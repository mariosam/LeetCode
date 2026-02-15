/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func longestBalanced(s string) int {
	n := len(s)
	ans := 0

	for i := 0; i < n; i++ {
		cnt := make([]int, 26)
		mx := 0
		v := 0

		for j := i; j < n; j++ {
			c := int(s[j] - 'a')

			cnt[c]++
			if cnt[c] == 1 {
				v++
			}

			if cnt[c] > mx {
				mx = cnt[c]
			}

			if mx*v == j-i+1 {
				if j-i+1 > ans {
					ans = j - i + 1
				}
			}
		}
	}

	return ans
}
