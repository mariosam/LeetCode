/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func matchPlayersAndTrainers(players []int, trainers []int) int {
	sort.Ints(players)
	sort.Ints(trainers)

	i, j, res := 0, 0, 0
	m, n := len(players), len(trainers)

	for i < m && j < n {
		if players[i] <= trainers[j] {
			res++
			i++
			j++
		} else {
			j++
		}
	}

	return res
}
