/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findWordsContaining(words []string, x byte) []int {
	result := []int{}

	for i, word := range words {
		for j := range word {
			if word[j] == x {
				result = append(result, i)
				break
			}
		}
	}

	return result
}
