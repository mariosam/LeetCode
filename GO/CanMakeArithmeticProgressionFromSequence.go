/**
 * @version GO 1.20.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"math"
	"sort"
)

func canMakeArithmeticProgression(arr []int) bool {
	sort.Ints(arr)

	for i := 0; i < len(arr)-2; i++ {
		if math.Abs(float64(arr[i]-arr[i+1])) != math.Abs(float64(arr[i+1]-arr[i+2])) {
			return false
		}
	}

	return true
}
