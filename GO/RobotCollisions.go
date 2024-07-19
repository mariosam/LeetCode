/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func survivedRobotsHealths(positions []int, healths []int, directions string) []int {
	type data struct {
		i, p, h int
		d       byte
	}

	arr := make([]data, len(positions))
	for i, position := range positions {
		arr[i] = data{i, position, healths[i], directions[i]}
	}
	sort.Slice(arr, func(i, j int) bool {
		return arr[i].p < arr[j].p
	})

	var toLeft, st []data
	for _, p := range arr {
		if p.d == 'R' {
			st = append(st, p)
			continue
		}

		for len(st) > 0 {
			top := &st[len(st)-1]
			if top.h > p.h {
				top.h--
				break
			}
			if top.h == p.h {
				st = st[:len(st)-1]
				p.h = 0
				break
			}
			p.h--
			st = st[:len(st)-1]
		}
		if len(st) == 0 && p.h != 0 {
			toLeft = append(toLeft, p)
		}
	}

	toLeft = append(toLeft, st...)
	sort.Slice(toLeft, func(i, j int) bool {
		return toLeft[i].i < toLeft[j].i
	})
	res := make([]int, len(toLeft))
	for i, d := range toLeft {
		res[i] = d.h
	}
	return res
}
