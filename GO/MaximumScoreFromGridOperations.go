/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func maximumScore(grid [][]int) int64 {
	n := len(grid)
	prefix := make([][]int64, n)
	for j := 0; j < n; j++ {
		prefix[j] = make([]int64, n+1)
		for i := 0; i < n; i++ {
			prefix[j][i+1] = prefix[j][i] + int64(grid[i][j])
		}
	}
	prevPick := make([]int64, n+1)
	prevSkip := make([]int64, n+1)
	for j := 1; j < n; j++ {
		currPick := make([]int64, n+1)
		currSkip := make([]int64, n+1)
		for curr := 0; curr <= n; curr++ {
			for prev := 0; prev <= n; prev++ {
				if curr > prev {
					score := prefix[j-1][curr] - prefix[j-1][prev]
					currPick[curr] = int64(math.Max(float64(currPick[curr]), float64(prevSkip[prev]+score)))
					currSkip[curr] = int64(math.Max(float64(currSkip[curr]), float64(prevSkip[prev]+score)))
				} else {
					score := prefix[j][prev] - prefix[j][curr]
					currPick[curr] = int64(math.Max(float64(currPick[curr]), float64(prevPick[prev]+score)))
					currSkip[curr] = int64(math.Max(float64(currSkip[curr]), float64(prevPick[prev])))
				}
			}
		}
		prevPick = currPick
		prevSkip = currSkip
	}
	var result int64
	for _, v := range prevPick {
		if v > result {
			result = v
		}
	}
	return result
}
