/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func maxIceCream(costs []int, coins int) int {
	ices := 0
	dollars := 0
	sort.Ints(costs)

	for i := 0; i < len(costs); i++ {
		if dollars < coins && coins > costs[i] {
			dollars += costs[i]
			ices++
		}
		//se passou do ponto
		if dollars > coins {
			dollars -= costs[i]
			ices--
			return ices
		}
		if dollars == coins {
			return ices
		}
	}

	return ices
}
