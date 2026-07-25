/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxActiveSectionsAfterTrade(s string) int {
	n := len(s)

	ans := 0
	i := 0
	pre := -int(^uint(0)>>1) - 1
	mx := 0
	for i < n {
		j := i + 1
		for j < n && s[j] == s[i] {
			j++
		}
		cur := j - i
		if s[i] == '1' {
			ans += cur
		} else {
			if pre+cur > mx {
				mx = pre + cur
			}
			pre = cur
		}
		i = j
	}
	return ans + mx
}
