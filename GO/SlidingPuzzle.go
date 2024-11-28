/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

func slidingPuzzle(board [][]int) int {
	m, b, q := make(map[string]bool), "", []string{}
	move := [][]int{{1, 0}, {-1, 0}, {0, 1}, {0, -1}}
	const target = "123450"
	for i := 0; i < len(board); i++ {
		for j := 0; j < len(board[i]); j++ {
			b += string(rune(board[i][j] + '0'))
		}
	}
	if b == target {
		return 0
	}
	m[b] = true
	q = append(q, b)
	for t := 1; len(q) != 0; t++ {
		for i, n := 0, len(q); i < n; i++ {
			s := q[0]
			q = q[1:]
			idx := strings.Index(s, "0")
			x, y := idx/3, idx%3
			for j := 0; j < 4; j++ {
				nx, ny := x+move[j][0], y+move[j][1]
				if nx < 0 || nx >= len(board) || ny < 0 || ny >= len(board[0]) {
					continue
				}
				tmp := []rune(s)
				tmp[nx*3+ny], tmp[x*3+y] = tmp[x*3+y], tmp[nx*3+ny]
				if string(tmp) == target {
					return t
				}
				if !m[string(tmp)] {
					m[string(tmp)] = true
					q = append(q, string(tmp))
				}
			}
		}
	}
	return -1
}
