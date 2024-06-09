/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func isNStraightHand(hand []int, groupSize int) bool {
	cnt := map[int]int{}
	for _, v := range hand {
		cnt[v]++
	}
	sort.Ints(hand)
	for _, v := range hand {
		if _, ok := cnt[v]; ok {
			for x := v; x < v+groupSize; x++ {
				if _, ok := cnt[x]; !ok {
					return false
				}
				cnt[x]--
				if cnt[x] == 0 {
					delete(cnt, x)
				}
			}
		}
	}
	return true
}
