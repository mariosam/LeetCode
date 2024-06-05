/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func scoreOfString(s string) int {
	score := 0

	for i := 1; i < len(s); i++ {
		score = score + int(math.Abs(float64(int(s[i-1])-int(s[i]))))
	}

	return score
}
