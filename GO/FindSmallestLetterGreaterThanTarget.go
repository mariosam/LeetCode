/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func nextGreatestLetter(letters []byte, target byte) byte {
	left := 0
	right := len(letters) - 1

	if target >= letters[len(letters)-1] {
		return letters[0]
	}

	for left <= right {
		mid := math.Floor((float64(left) + float64(right)) / 2)

		if letters[int(mid)] > target {
			right = int(mid) - 1
		} else {
			left = int(mid) + 1
		}
	}

	return letters[left]
}
