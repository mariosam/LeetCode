/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countCharacters(words []string, chars string) int {
	cnt := make(map[byte]int)
	res := 0
	for _, ch := range []byte(chars) {
		cnt[ch]++
	}

	for _, word := range words {
		tmp := make(map[byte]int)
		match := true
		for _, ch := range []byte(word) {
			tmp[ch]++
			if tmp[ch] > cnt[ch] {
				match = false
				break
			}
		}
		if match {
			res += len(word)
		}
	}
	return res
}
