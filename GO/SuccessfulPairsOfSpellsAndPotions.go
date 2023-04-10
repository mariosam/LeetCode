/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func successfulPairs(spells []int, potions []int, success int64) []int {
	sort.Ints(potions)
	answer := make([]int, len(spells))
	m := len(potions)
	maxPotion := potions[m-1]

	for i, spell := range spells {
		minPotion := int((success + int64(spell) - 1) / int64(spell))

		if minPotion > maxPotion {
			answer[i] = 0
			continue
		}
		index := sort.SearchInts(potions, minPotion)
		answer[i] = m - index
	}

	return answer
}
