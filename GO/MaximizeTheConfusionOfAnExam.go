/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxConsecutiveAnswers(answerKey string, k int) int {
	get := func(c byte, k int) int {
		l, r := -1, -1
		for r < len(answerKey)-1 {
			r++
			if answerKey[r] == c {
				k--
			}
			if k < 0 {
				l++
				if answerKey[l] == c {
					k++
				}
			}
		}
		return r - l
	}
	return max(get('T', k), get('F', k))
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}
