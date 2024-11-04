/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func makeFancyString(s string) string {
	ans := []rune{}
	for _, c := range s {
		if n := len(ans); n < 2 || c != ans[n-1] || c != ans[n-2] {
			ans = append(ans, c)
		}
	}
	return string(ans)
}
