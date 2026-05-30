/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numberOfSpecialChars(word string) int {
	lowerLastOccurrence := make(map[rune]int)

	upperFirstOccurrence := make(map[rune]int)
	ret := 0
	for i, c := range word {
		if c >= 'a' && c <= 'z' {
			lowerLastOccurrence[c] = i
		} else {
			if _, exists := upperFirstOccurrence[c]; !exists {
				upperFirstOccurrence[c] = i
			}
		}
	}
	for i := 0; i < 26; i++ {
		c := rune(i + 'A')
		c2 := rune(i + 'a')
		lowerPos, lowerExists := lowerLastOccurrence[c2]
		upperPos, upperExists := upperFirstOccurrence[c]
		if upperExists && lowerExists && lowerPos < upperPos {
			ret++
		}
	}
	return ret
}
