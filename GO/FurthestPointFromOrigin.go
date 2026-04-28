/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func furthestDistanceFromOrigin(moves string) int {
	movesMap := make(map[rune]int)
	for _, move := range moves {
		movesMap[move]++
	}
	if movesMap['R'] > movesMap['L'] {
		return movesMap['_'] + movesMap['R'] - movesMap['L']
	} else {
		return movesMap['_'] + movesMap['L'] - movesMap['R']
	}
	return 0
}
