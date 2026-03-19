/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func minNumberOfSeconds(mountainHeight int, workerTimes []int) int64 {
	l := int64(1)

	minWorker := workerTimes[0]
	for _, v := range workerTimes {
		if v < minWorker {
			minWorker = v
		}
	}

	r := int64(minWorker) * int64(mountainHeight) * int64(mountainHeight+1) / 2

	for l < r {
		m := (l + r) / 2

		if getReducedHeight(workerTimes, m) < mountainHeight {
			l = m + 1
		} else {
			r = m
		}
	}

	return l
}

func getReducedHeight(workerTimes []int, m int64) int {
	reducedHeight := 0

	for _, workerTime := range workerTimes {
		reducedHeight += int((-1 + math.Sqrt(1+8*float64(m)/float64(workerTime))) / 2)
	}

	return reducedHeight
}
