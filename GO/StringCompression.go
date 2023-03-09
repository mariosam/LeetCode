/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strconv"

func compress(chars []byte) int {
	if len(chars) == 0 {
		return 0
	} else if len(chars) == 1 {
		return 1
	}

	comp := chars[0]
	count := 1
	compressIdx := 0

	for i := 1; i <= len(chars); i++ {
		if i < len(chars) && chars[i] == comp {
			count++
		} else {
			chars[compressIdx] = comp
			compressIdx++

			if count > 1 {
				countStr := strconv.Itoa(count)
				for j := 0; j < len(countStr); j++ {
					chars[compressIdx+j] = countStr[j]
				}
				compressIdx += len(countStr)
			}

			if i < len(chars) {
				comp = chars[i]
			}
			count = 1
		}
	}

	return compressIdx
}
