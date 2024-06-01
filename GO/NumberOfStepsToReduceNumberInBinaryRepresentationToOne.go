/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numSteps(s string) int {
	carry := 0
	res := 0
	n := len(s)

	for i := n - 1; i > 0; i-- {
		res += 1
		if int(s[i]-'0')+carry == 1 {
			carry = 1
			res += 1
		}
	}

	return res + carry
}
