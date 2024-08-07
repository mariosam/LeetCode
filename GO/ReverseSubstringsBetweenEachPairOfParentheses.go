/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func reverseParentheses(s string) string {
	stk := []byte{}
	for i := range s {
		if s[i] == ')' {
			t := []byte{}
			for stk[len(stk)-1] != '(' {
				t = append(t, stk[len(stk)-1])
				stk = stk[:len(stk)-1]
			}
			stk = stk[:len(stk)-1]
			stk = append(stk, t...)
		} else {
			stk = append(stk, s[i])
		}
	}
	return string(stk)
}
