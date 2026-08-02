/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minimumPushes(word string) int {
	length := len(word)

	if length <= 8 {
		return length
	} else if length <= 16 {
		return 8 + (length-8)*2
	} else if length <= 24 {
		return 8 + 8*2 + (length-16)*3
	}
	return 8 + 8*2 + 8*3 + (length-24)*4
}
