/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func minimumBoxes(apple []int, capacity []int) int {
	numberOfApples := 0
	for _, count := range apple {
		numberOfApples += count
	}

	sort.Ints(capacity)

	boxCapacity := 0
	numberOfBoxes := 0

	for i := len(capacity) - 1; i >= 0; i-- {
		boxCapacity += capacity[i]
		numberOfBoxes++
		if boxCapacity >= numberOfApples {
			break
		}
	}

	return numberOfBoxes
}
