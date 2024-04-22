/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func makeGood(s string) string {
	stack := []byte{}
	for i := 0; i <= len(s)-1; i++ {
		if len(stack) != 0 && (s[i] == stack[len(stack)-1]+32 || s[i] == stack[len(stack)-1]-32) {
			stack = stack[:len(stack)-1]
			continue
		}
		stack = append(stack, s[i])
	}
	return string(stack)
}
