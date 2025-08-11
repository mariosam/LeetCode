/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func totalFruit(fruits []int) int {
	n := len(fruits)
	if n == 0 {
		return 0
	}

	present := fruits[0]
	presentIndex := 0
	index := 1
	start := 0
	maxLen := 0

	// avança pelo trecho inicial de valores iguais
	for index < n && fruits[index] == present {
		index++
	}
	if index == n {
		return index - start
	}

	previous := present
	// previousIndex removido porque não é usado
	present = fruits[index]
	presentIndex = index

	for index < n {
		if fruits[index] == previous {
			previous = present
			present = fruits[index]
			presentIndex = index
		} else if fruits[index] != present {
			if index-start > maxLen {
				maxLen = index - start
			}
			start = presentIndex
			previous = present
			present = fruits[index]
			presentIndex = index
		}
		index++
	}

	if index-start > maxLen {
		maxLen = index - start
	}
	return maxLen
}
