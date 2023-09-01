/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func convertToTitle(columnNumber int) string {
	str := ""
	for columnNumber > 0 {
		tem := columnNumber % 26
		if tem == 0 {
			tem = 26
			columnNumber--
		}
		tem = tem + 64
		str = string(rune(tem)) + str
		columnNumber /= 26
	}
	return str
}
