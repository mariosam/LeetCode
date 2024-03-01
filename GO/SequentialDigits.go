/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func sequentialDigits(low int, high int) []int {
	var results []int
	for i := 1; i <= 9; i++ {
		num := i
		for j := i + 1; j <= 9; j++ {
			num = num*10 + j
			if num >= low && num <= high {
				results = append(results, num)
			}
		}
	}
	sort.Ints(results)
	return results
}
