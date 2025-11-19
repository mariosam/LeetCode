/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numSub(s string) int {
	count, sum := 0, 0
	mod := int(1e9 + 7)

	for i := 0; i < len(s); i++ {
		if s[i] == '1' {
			sum++
			count = (count + sum) % mod
		} else {
			sum = 0
		}
	}

	return count
}
