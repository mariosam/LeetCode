/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxNumberOfBalloons(text string) int {
	m := make(map[rune]int)

	set := make(map[rune]bool)
	for _, ch := range text {
		m[ch]++
	}
	minVal := len(text)
	for ch, count := range m {
		if ch == 'b' || ch == 'a' || ch == 'n' {
			if count < minVal {
				minVal = count
			}
			set[ch] = true
		}
		if ch == 'o' || ch == 'l' {
			if count/2 < minVal {
				minVal = count / 2
			}
			set[ch] = true
		}
	}
	if len(set) == 5 {
		return minVal
	}
	return 0
}
