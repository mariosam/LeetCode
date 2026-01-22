/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func separateSquares(squares [][]int) float64 {
	halfArea := 0.0
	for _, sq := range squares {
		l := sq[2]
		halfArea += float64(l * l)
	}
	halfArea /= 2

	events := [][]int{}
	for _, sq := range squares {
		y := sq[1]
		l := sq[2]
		events = append(events, []int{y, 1, l})
		events = append(events, []int{y + l, 0, l})
	}

	sort.Slice(events, func(i, j int) bool {
		return events[i][0] < events[j][0]
	})

	area := 0.0
	width := 0
	prevY := 0

	for _, e := range events {
		y, typ, l := e[0], e[1], e[2]
		gain := float64(width * (y - prevY))
		if area+gain >= halfArea {
			return float64(prevY) + (halfArea-area)/float64(width)
		}
		area += gain
		if typ == 1 {
			width += l
		} else {
			width -= l
		}
		prevY = y
	}

	panic("invalid input")
}
