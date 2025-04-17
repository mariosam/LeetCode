/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func countGoodTriplets(arr []int, a int, b int, c int) int {
	n := len(arr)
	count := 0

	for i := 0; i < n; i++ {
		for j := i + 1; j < n; j++ {
			if int(math.Abs(float64(arr[i]-arr[j]))) > a {
				continue
			}
			for k := j + 1; k < n; k++ {
				if int(math.Abs(float64(arr[j]-arr[k]))) > b || int(math.Abs(float64(arr[i]-arr[k]))) > c {
					continue
				}
				count++
			}
		}
	}

	return count
}
