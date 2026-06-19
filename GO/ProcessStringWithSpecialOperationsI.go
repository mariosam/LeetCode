/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func processStr(s string) string {
	ret := ""

	for _, c := range s {
		switch c {
		case '*':
			if len(ret) > 0 {
				ret = ret[:len(ret)-1]
			}
		case '#':
			if len(ret) > 0 {
				ret += ret
			}
		case '%':
			runes := []rune(ret)
			for i, j := 0, len(runes)-1; i < j; i, j = i+1, j-1 {
				runes[i], runes[j] = runes[j], runes[i]
			}
			ret = string(runes)
		default:
			ret += string(c)
		}
	}
	return ret
}
