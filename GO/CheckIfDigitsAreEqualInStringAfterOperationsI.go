/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func hasSameDigits(s string) bool {
	t := []byte(s)
	n := len(t)
	for k := n - 1; k > 1; k-- {
		for i := 0; i < k; i++ {
			t[i] = byte(((int(t[i]-'0') + int(t[i+1]-'0')) % 10) + int('0'))
		}
	}
	return t[0] == t[1]
}
