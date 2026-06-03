/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"sort"
)

func asteroidsDestroyed(mass int, asteroids []int) bool {
	var total int64 = int64(mass)

	sort.Ints(asteroids)
	for _, asteroid := range asteroids {
		if int64(asteroid) > total {
			return false
		}
		total += int64(asteroid)
	}
	return true
}
