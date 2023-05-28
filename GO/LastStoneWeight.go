/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"math"
	"sort"
)

func lastStoneWeight(stones []int) int {
	sort.Ints(stones)
	if len(stones) == 0 {
		return 0
	}
	if len(stones) == 1 {
		return stones[0]
	}

	x := stones[len(stones)-1]
	y := stones[len(stones)-2]
	if x == y {
		return lastStoneWeight(stones[:len(stones)-2])
	}
	z := int(math.Abs(float64(x) - float64(y)))

	return lastStoneWeight(append(stones[:len(stones)-2], z))
}
